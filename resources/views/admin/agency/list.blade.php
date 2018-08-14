@extends('admin.layout.default')

@section('css')
  <link href="{{ asset('plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />
    <link type="text/css" rel="stylesheet" href="{{ asset('plugins/datatable/jquery.dataTables.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('plugins/datatable/select.dataTables.min.css') }}">
@endsection


@section('jsPostApp')
    
    <!-- <script src="{{ asset('script/memberlist_function.js') }}" type="text/javascript"></script> -->
    <script src="{{ asset('plugins/datatable/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('plugins/datatable/dataTables.select.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/datatable/templates.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/datatable/using-api.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.modal').modal();
            $('select').material_select();
        } );
    </script>
@endsection

@section('content')

<div class="main-container">
    <div class="row">
        <div class="col s12 mr-top-10">
            
              <div id="modal1" class="modal modal-fixed-footer  ">
                  <div class="modal-content">
                      <div class="col s12">
                          <h5>Add Loan Type</h5>
                      </div>
                      <form name="callback" >
                          <div class="row">
                            <div class="col s12">
                            <div class="input-field">
                                <input type="text" id="admin-name" name="name">
                                <label for="admin-name">Loan Type Label</label>
                            </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col m6">
                              <div class="input-field">
                                  <input type="email" id="admin-email" name="email" >
                                  <label for="admin-email">Percent</label>
                              </div>
                            </div>
                            <div class="col m6">
                              <div class="input-field">
                                  <input type="email" id="max" name="email" >
                                  <label for="max">Maximum Terms of payment</label>
                              </div>
                            </div>
                          </div>
                      </form>
                  </div>
                  <div class="modal-footer">
                      <a href="javascript:void(0);" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
                      
                      <a href="javascript:void(0);" class="btn-flat" >Add</a>
                  </div>
              </div>    

                <div id="modal2" class="modal auto modal-fixed-footer">
                  <form class="profile-info-form" method="post" action="" id="forma">
                    <div class="modal-content">
                          
             <div class="col s12 m12 l12">
                <div class="card card-dash">
                  <div class="card-header z-depth-2 primary-bg"><i class="material-icons left">home</i><span class="caption">List of member in Department of Trade and Industry</span>
              <!--      <button class="btn-floating right waves-effect waves-light" data-target="modal1" ><i class="material-icons right"></i></button> -->

                <!--   <button class="btn-floating right waves-effect waves-light" data-target="modal2" ><i class="material-icons right">person</i></button> -->
                  </div>
                  <div class="card-content">
                    <div class="datatable-wrapper black-text">
                            <table cellspacing="0" width="100%" id="memberslist" class="responsive-table datatable-selection-single display cell-border">
                                <thead>
                                    <tr>
                                        <th>Logo</th>
                                        <th>Abbreviation</th>
                                        <th>Label</th>
                                        <th>Status</th>
                                        <th>Remarks</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                          <td></td>
                                          <td>Tiger Nixon</td>
                                          <td>61</td>
                                          <td>2011/04/25</td>
                                          <td>$320,800</td>
                                          <td>
                                              <div class="action-btns">
                                                   <button class="btn-floating waves-effect waves-light" data-target="modal2" ><i class="material-icons">person</i></button>
                                              </div>
                                           </td>
                                        </tr>
                                        <tr>
                                          <td></td>
                                          <td>Edinburgh</td>
                                          <td>61</td>
                                          <td>2011/04/25</td>
                                          <td>$320,800</td>
                                          <td>
                                              <div class="action-btns">
                                                   <button class="btn-floating waves-effect waves-light green" data-target="modal2" ><i class="material-icons">check</i></button>
                                              </div>
                                           </td>
                                        </tr>
                                       
                                </tbody>
                            </table>
                    </div>
                  </div>
                  
                </div>
             </div>
                    </div>
                        
                    
                    <div class="modal-footer">
                        <button class="btn waves-effect waves-set" type="submit" name="update_profile">Save<i class="material-icons right">save</i>
                                </button>
                    </div>
                  </form>
                </div>
   

             <div class="col s12 m12 l12">
                <div class="card card-dash">
                  <div class="card-header z-depth-2 primary-bg"><i class="material-icons left">home</i><span class="caption">Agency List</span> <button class="btn-floating right waves-effect waves-light" data-target="modal1" ><i class="material-icons right">add</i></button>

                <!--   <button class="btn-floating right waves-effect waves-light" data-target="modal2" ><i class="material-icons right">person</i></button> -->
                  </div>
                  <div class="card-content">
                    <div class="datatable-wrapper black-text">
                             <table cellspacing="0" width="100%" id="memberslist" class="responsive-table datatable-selection-single display cell-border">
                                <thead>
                                    <tr>
                                        <th>Logo</th>
                                        <th>Abbreviation</th>
                                        <th>Label</th>
                                        <th>Status</th>
                                        <th>Remarks</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                          <td></td>
                                          <td>Tiger Nixon</td>
                                          <td>61</td>
                                          <td>2011/04/25</td>
                                          <td>$320,800</td>
                                          <td>
                                              <div class="action-btns">
                                                   <button class="btn-floating waves-effect waves-light" data-target="modal2" ><i class="material-icons">person</i></button>
                                              </div>
                                           </td>
                                        </tr>
                                        <tr>
                                          <td></td>
                                          <td>Edinburgh</td>
                                          <td>61</td>
                                          <td>2011/04/25</td>
                                          <td>$320,800</td>
                                          <td>
                                              <div class="action-btns">
                                                   <button class="btn-floating waves-effect waves-light green" data-target="modal2" ><i class="material-icons">check</i></button>
                                              </div>
                                           </td>
                                        </tr>
                                       
                                </tbody>
                            </table>
                    </div>
                  </div>
                  
                </div>
             </div>
        </div>
    </div>
</div>


@endsection