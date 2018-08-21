<?php

namespace App\Http\Controllers\Admin;

use Gate;
use App\Admin;
use Illuminate\Http\Request;
use App\Mail\WelcomeNewAdmin;
use App\Http\Controllers\Controller;
use App\Traits\FileManipulationTrait;
use App\Transformers\AdminTransformer;
use Yajra\Datatables\Datatables;

class MembersController extends Controller
{
   use FileManipulationTrait;

    protected $admin;
    protected $adminTransformer;

    public function __construct(Admin $admin, AdminTransformer $adminTransformer)
    {
        $this->admin            = $admin;
        $this->adminTransformer = $adminTransformer;
    }

    public function postsdata(){

        $memberlist = Admin::where('status','active');

        return DataTables::of($memberlist)
                ->addcolumn("action",function($memberlist){
                    return '<div class="action-btns">
                                  <button class="btn-floating warning-bg edit" data-target="modal1"><i class="material-icons">edit</i></button>
                                  <button class="btn-floating info-bg profile"><i class="material-icons">person</i></button>
                            </div>';
                })
                ->make(true);
    }

    public function getinfo(Request $request, $id){
    	$info = $this->admin->findOrfail($id);
    	return response()->json($info);
    }

    public function store(Request $request){

    	if (Gate::denies('developerOnly') && Gate::denies('admin.create')) { 
            return response(['error' => trans('messages.unauthorized-access')], 401);
        }

        $validator = validator()->make($request->all(), [
            'lname'   => 'required|max:255',
            'email'  => 'required|email|max:255|unique:admins'
        ]);
        if ($validator->fails()) {
            return response(['error' => trans('messages.parameters-fail-validation')], 422);
        }

        // Prepare Input
        $setPassword           = randomInteger();
        $input                 = $request->all();
        $input['password']     = bcrypt($setPassword);
        $input['status']       = Admin::STATE_ACTIVE;
        $input['name']         = $request->fname. " " . $request->lname;
        // Create Member
        $admin = $this->admin->create($input);

        // Assign Role
      	$admin->assignRole("User");
        

        // Mailing for password
        /*$mail = new WelcomeNewAdmin($admin, $setPassword);
        \Mail::to($admin->email)->send($mail);*/

        $newAdmin          = $admin->toArray();
        $newAdmin['roles'] = $admin->roles;

       
        return response([
            'data'        => $input,
            'message'     => trans('messages.member-add'),
            'status_code' => 201
        ], 201);
    }

    public function update(Request $request, $id){
    	if (Gate::denies('developerOnly') && Gate::denies('admin.create')) { 
            return response(['error' => trans('messages.unauthorized-access')], 401);
        }

        $admin = Admin::findOrFail($id);

        $validator = validator()->make($request->all(), [
            'lname'   => 'required|max:255',
            'email'  => 'required|email|max:255'
        ]);
        if ($validator->fails()) {
            return response(['error' => trans('messages.parameters-fail-validation')], 422);
        }

        $input             = $request->all();
        $input['name']     = $request->fname. " " . $request->lname;
        
        Admin::whereId($id)->update($input);
        
        return response([
            'message'     => trans('messages.member-update'),
            'status_code' => 201
        ], 201);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
}
