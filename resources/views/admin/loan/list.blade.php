@extends('admin.layout.default')

@section('css')
	<link href="{{ asset('plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />
    <link type="text/css" rel="stylesheet" href="{{ asset('plugins/datatable/jquery.dataTables.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('plugins/datatable/select.dataTables.min.css') }}">
@endsection


@section('jsPostApp')
     <script type="text/javascript">
        $(document).ready(function(){
            $('.modal').modal();
            $('select').material_select();

       
        setInterval(function(){
                $('.datatable-selection-single').DataTable().ajax.reload();
              },10000);
       });
    </script>
    <script src="{{ asset('script/loanlist_function.js') }}" type="text/javascript"></script>
    <script src="{{ asset('plugins/datatable/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('plugins/datatable/dataTables.select.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/datatable/templates.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/datatable/using-api.js') }}"></script>
    <script src="{{ asset('plugins/formatter/formatter.js')}}"></script>
    <script src="{{ asset('plugins/jquery.numbox-1.2.0/jquery.numbox-1.2.0.min.js')}}"></script>

   
@endsection

@section('content')

<div id="modalComment" class="modal modal-fixed-footer s">
  <div class="modal-content">
    <h4>Remarks</h4>
      <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Write you remarks</label>
        </div>
      </div>
    </form>
  </div>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Save</a>
  </div>
</div>


<div class="main-container">
    <div class="row">
        <div class="col s12 mr-top-10">
             <div class="col s12 m12 l12">
                <div class="card card-dash">
                  <div class="card-header z-depth-2 primary-bg"><i class="material-icons left">assignment_ind</i><span class="caption"><a style="color: white" href="#"> Pending Loan List</a></span> / <span class="caption"><a href="#" style="color: white"> Approved Loan List</a></span> 
                    <!-- <button class="btn-floating right waves-effect waves-light" data-target="modal1" ><i class="material-icons right">add</i></button> -->
                  </div>
                  <div class="card-content">
                    <div class="datatable-wrapper black-text">
                        <table cellspacing="0" width="100%" id="loanlist" class="responsive-table datatable-selection-single display cell-border">
                            <thead>
                                <tr>
                                    <th>Reference #</th>
                                    <th>Loan Type</th>
                                    <th>Borrower's Name</th>
                                    <th>Loan Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                  </div>
                  
                </div>
             </div>
        </div>
    </div>
</div>
<div id="modal1" class="modal auto modal-fixed-footer">
    <div class="modal-content">
        <div class="row">
            <div class="col s6">
                <div class="row box-title">
                    <div class="col s12">
                        <h5>Profile Information</h5>
                    </div>
                </div>
                <div class="row">
                  <div class="input-field col m6 s12"><i class="material-icons prefix">calendar_today</i>
                    <input type="text" class="validate datepicker" id="datefiling" name="datefiling" value='' placeholder="" disabled="true" >
                    <label for="datefiling">Date of filing</label>
                  </div>
                  <div class="input-field col m6 s12"><i class="material-icons prefix">description</i>
                    <select class="validate basic-select" name="loanstatus" id="loanstatus" disabled="true">
                      <option value="" disabled selected>Select Loan Status</option>
                      <option value="New Loan" selected>New loan</option>
                      <option value="Renewal" selected>Renewal</option>
                    </select>
                    <label for="sex">Loan Status</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col m6 s12"><i class="material-icons prefix">date_range</i>
                    <select class="validate basic-select" name="loanterms" id="loanterms" disabled="true">
                      <option value="" disabled selected>Select Loan Terms</option>
                      <option value="3" >Three(3) months</option>
                      <option value="6" >Six(6) months</option>
                      <option value="12" >Twelve(12) months</option>
                      <option value="18" >Eigtheen(18) months</option>
                      <option value="24" >Twenty-four(24) months</option>
                      <option value="32" >Thirty-two(32) months</option>
                      <option value="60" >Sixty(60) months</option>
                    </select>
                    <label for="sex">Terms of payment</label>
                  </div>
                  <div class="input-field col m6 s12"><i class="material-icons prefix">assignment</i>
                    <select class="validate basic-select" name="loantype" id="loantype" disabled="true">
                      <option value="" disabled selected>Select Loan Type</option>
                      <option value="Petty Cash" >Petty Cash</option>
                      <option value="Emergency" >Emergency</option>
                      <option value="Travel" >Travel</option>
                      <option value="Commodity" >Commodity</option>
                      <option value="Regular" >Regular loan</option>
                    </select>
                    <label for="sex">Type of Loan</label>
                  </div>
                </div>
                 <div class="row">
                  <div class="input-field col m6 s6"><i class="material-icons prefix">perm_identity</i>
                    <input class="validate" type="text" id="name" name="name" value="" placeholder="" readonly />
                    <label for="coid">Barrower's Name</label>
                  </div>
                
                  <div class="input-field col m6 s6"><i class="material-icons prefix">perm_identity</i>
                    <input class="validate" type="text" id="age" name="age" value="" placeholder="" readonly />
                    <label for="coid">Barrower's Age</label>
                  </div>
                </div>  
            </div>
            <div class="col s6">
                <div class="row box-title">
                    <div class="col s12">
                        <h5>Co-maker's Pledge</h5>
                    </div>
                </div>
                <div class="row">
                  <div class="input-field col s12"><i class="material-icons prefix">lock</i>
                    <input class="validate" type="password" id="signaturekey2" name="signaturekey2" value="" placeholder="" readonly>
                    <label for="signaturekey2">Signature key</label>
                  </div>
                </div> 
                <div class="row">
                  <div class="input-field col m7 s12"><i class="material-icons prefix">perm_identity</i>
                    <input class="validate" type="text" id="coid" name="coid" value="" readonly />
                    <label for="coid">Comaker's ID</label>
                  </div>
                  <div class="input-field col m5 s12"><i class="material-icons prefix">person</i>
                    <input class="validate" type="text" id="coname" name="coname" value="" readonly />
                    <label for="coname">Co-maker Name</label>
                  </div>
                </div> 
                <div class="row">
                  <div class="input-field col m7 s12"><i class="material-icons prefix">book</i>
                    <input class="validate" type="text" id="copassbookno" name="copassbookno" value="" readonly />
                    <label for="copassbookno">Passbook no.</label>
                  </div>
                  <div class="input-field col m5 s12"><i class="material-icons prefix"><span>&#8369;</span></i>
                    <input class="validate" type="text" id="cosharecapital" name="cosharecapital" value="" readonly />
                    <label for="cosharecapital">Amount of fixed deposit</label>
                  </div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col s12">
                 <div class="card card-dash">
                  <div class="card-header z-depth-2 primary-bg"><i class="material-icons left"><span>&#8369;</span></i><span class="caption">Loan Calculation</span>
                  </div>
                  <div class="card-content">
                    <b>
                    <div class="row" style="color: rgba(0, 0, 0, 0.87)">
                        <div class="col s12 m4">

                            <ul class="collection">
                              <li class="mr-top-10">
                                  <div class="input-field col s12 m12">
                                          <input type="text"  id="sharecapital" name="sharecapital" class="inputUSD right-align" value="" readonly/>
                                          <label for="sharecapital">Share Capital x 2</label>
                                  </div>
                              </li>
                              <li class="mr-top-10">
                                Loan Balances
                                  <ol>
                                      <li class="mr-top-10">
                                        <div class="input-field col s12 m6">
                                          <input type="text" id="totalregularloan" name="totalregularloan" class="inputUSD right-align" value="" readonly />
                                          <label for="totalregularloan">Regular Loan</label>
                                        </div>
                                      
                                        <div class="input-field col s12 m6">
                                          <input type="text" id="totalpettycashloan" name="totalpettycashloan" class="inputUSD right-align" value="" readonly/>
                                          <label for="totalpettycashloan">Petty Cash Loan</label>
                                        </div>
                                      </li>
                                      <li class="mr-top-10">
                                        <div class="input-field col s12 m6">
                                          <input type="text" id="totalemergencyloan"  name="totalemergencyloan" class="inputUSD right-align" value="" readonly/>
                                          <label for="totalemergencyloan">Emergency Loan</label>
                                        </div>
                                      
                                        <div class="input-field col s12 m6">
                                          <input type="text" id="totalcommodityloan" name="totalcommodityloan" class="inputUSD right-align" value="" readonly/>
                                          <label for="totalcommodityloan">Commodity Loan</label>
                                        </div>
                                      </li>
                                      <li class="mr-top-10">
                                        <div class="input-field col s12 m6">
                                          <input type="text" id="otherstloan" name="otherstloan" class="inputUSD right-align" value="" readonly/>
                                          <label for="otherstloan">Travel Loan</label>
                                        </div>
                                      </li>
                                  </ol>
                              </li>
                              <li class="mr-top-10">
                                <div class="input-field col s12 m12">
                                    <input type="text" id="totalloans" name="totalloans" class="inputUSD right-align" value="" readonly/>
                                    <label for="inputUSD">Total Loans</label>
                                </div>
                              </li>
                              <li class="mr-top-10">
                                <div class="input-field col s12 m12">
                                    <input type="text" id="totalloanable" name="totalloanable" class="inputUSD right-align" value="" readonly/>
                                    <label for="inputUSD">Total Loanable Amount</label>
                                </div>
                              </li>
                            </ul>
                        </div>
                        <div class="col s12 m4">
                            <ul class="collection">
                              <li class="mr-top-10">
                                
                                  <div class="input-field col s12"><i class="material-icons prefix"><span>&#8369;</span></i>
                                    <input type="number" class="inputUSD right-align" id="loanamount" name="loanamount" value="" readonly>
                                    <label for="loanamount" readonly>Loan Amount</label>
                                  </div>
                                   <div class="input-field col s12"><i class="material-icons prefix">lock</i>
                                    <input class="validate" type="password" id="signaturekey1" name="signaturekey1" value="" placeholder="">
                                    <label for="signaturekey1">Signature key</label>
                                  </div>
                              </li>
                              <li class="mr-top-10">
                                Deductions
                                  <ol>
                                      <li class="mr-top-10">
                                        <div class="input-field col s12 m6">
                                          <input type="text" name="priorloan" id="priorloan" class="validate inputUSD right-align" placeholder="" required readonly/>
                                          <label for="priorloan">Prior Loan</label>
                                        </div>
                                        <div class="input-field col s12 m6">
                                          <input type="text" name="servicefee" id="servicefee" class="inputUSD right-align" value="0.00" placeholder="" readonly/>
                                          <label for="servicefee">Service fee</label>
                                        </div>
                                        <div class="input-field col s12 m6">
                                          <input type="text" name="retentionfee" id="retentionfee" class="inputUSD right-align" value="0.00" placeholder="" readonly/>
                                          <label for="retentionfee">Retention fee</label>
                                        </div>
                                        <div class="input-field col s12 m6">

                                          <input type="text" name="insurancefee" id="insurancefee" class="inputUSD right-align" value="0.00" placeholder="" readonly/>
                                          <label for="insurancefee">* Isurance fee</label>
                                        </div>
                                      </li>
                                  </ol>
                                  
                              </li>
                              <li class="mr-top-10">
                                <div class="input-field col s12 m12">
                                  <input type="text" name="totaldeductions" id="totaldeductions" class="inputUSD right-align" value="0.00" placeholder="" readonly/>
                                  <label for="totaldeductions">Total Deductions</label>
                                </div>
                              </li>
                              <li class="mr-top-10">
                                <div class="input-field col s12 m12">
                                  <input type="text" name="netproceeds" id="netproceeds" class="inputUSD right-align small" value="0.00" placeholder="" readonly/>
                                  <label for="netproceeds">Net Proceeds</label>
                                </div>
                              </li>
                            </ul>
                        </div>
                        <div class="col s12 m4">
                            <ul class="collection">
                              <li class="mr-top-10">
                                Interest per month
                                  <ol>
                                      <li class="mr-top-10">
                                         <div class="input-field col s12 m6">
                                            <input type="text" name="interestpercent" id="interestpercent" class="inputUSD right-align" value="0" placeholder="" readonly/>
                                            <label for="interestpercent">Percent (%)</label>
                                        </div>
                                        <div class="input-field col s12 m6">
                                            <input type="text" name="interestamount" id="interestamount" class="inputUSD right-align" value="0" placeholder="" readonly/>
                                            <label for="interestamount">Amount</label>
                                        </div>
                                      </li>
                                  </ol>
                              </li>
                              <li class="mr-top-10">
                                <div class="input-field col s12 m12">
                                    <input type="text" name="totalinterest" id="totalinterest" class="inputUSD right-align" value="0" placeholder="" readonly/>
                                    <label for="totalinterest">Total Interest</label>
                                </div>
                              </li>
                              <li class="mr-top-10">
                                <div class="input-field col s12 m12">
                                    <input type="text" name="totalamount" id="totalamount" class="inputUSD right-align" value="0" placeholder="" readonly/>
                                    <label for="totalamount">Total Amount</label>
                                </div>
                              </li>
                              <li class="mr-top-10">
                                <div class="input-field col s12 m12">
                                    <input type="text" name="monthlyamort" id="monthlyamort" class="inputUSD right-align" value="0" placeholder="" readonly/>
                                    <label for="monthlyamort">Monthly Amortization</label>
                                </div>
                              </li>
                              <li class="mr-top-10">
                                <p>

                                   Note: 


                                        Interest is computed based from the beginning/forwarded PRINCIPAL balance of the current year.
                                </p>
                              </li>
                            </ul>
                        </div>
                        <div class="col s5">
                            <div class="card card-dash">
                                <div class="card-header z-depth-2 primary-bg"><i class="material-icons left">person</i>
                                      <span class="caption">Loan Officer Section</span>
                                </div>
                                <form class="profile-info-form" enctype="multipart/form-data" role="form" id="forma">
                                  {{ csrf_field() }}
                                <div class="card-content">
                                  <div class="row" style="color: rgba(0, 0, 0, 0.87)">
                                      <div class="col s12 m12">
                                            <div class="input-field col s12 m12">
                                                <input type="text" name="loanofficername" id="loanofficername" class="right-align" value="{{ucwords(Auth::user()->name)}}" placeholder="" readonly />
                                                <label for="cleavecredits">Name</label>
                                            </div>
                                      </div>
                                      <div class="col s12 m12">
                                            <div class="input-field col s12 m12">
                                                <input type="text" name="cleavecredits" id="cleavecredits" class="right-align" value="0" placeholder="" required/>
                                                <label for="cleavecredits">Current Leave Credits</label>
                                            </div>
                                      </div>
                                      <div class="col s12 m12">
                                            <div class="input-field col s12 m12">
                                                <input type="text" name="csalaryamount" id="csalaryamount" class="right-align" value="0" placeholder="" required />
                                                <label for="csalaryamount">Current Salary Amount</label>
                                            </div>
                                      </div>
                                      <div class="col s12 m12">
                                            <div class="input-field col s12 m12">
                                                <input type="text" name="loanofficerremarks" id="loanofficerremarks" class="right-align" value="0" placeholder="" required/>
                                                <label for="csalaryamount">Remarks</label>
                                            </div>
                                      </div>
                                      <div class="input-field col m12 s12"><i class="material-icons prefix">description</i>
                                          <select class="basic-select" name="loanofficeraction" id="loanofficeraction">
                                            <option value="Approved" selected>Approved</option>
                                            <option value="Disapproved" >Disapproved</option>
                                          </select>
                                          <label for="loanofficeraction">Loan Status</label>
                                      </div>
                                      <div class="input-field col m12 s12"><i class="material-icons prefix">description</i>
                                          <select class="basic-select" name="loanofficerptag" id="loanofficerptag">
                                            <option value="2" selected>For CreCom Section</option>
                                            <option value="3" >For BOD Section</option>
                                            <option value="4" >Treasurer for Releasing</option>
                                          </select>
                                          <label for="loanofficerptag">Next Step/s</label>
                                      </div>
                                  </div>
                                </div>
                                <div class="card-footer">
                                  <button class="btn waves-effect waves-set" type="submit" id="loanofficerprocess" >Save<i class="material-icons right">save</i></button>
                                </div>
                               </form>
                            </div>
                        </div>
                        <div class="col s3">
                            <div class="card card-dash">
                                <div class="card-header z-depth-2 primary-bg"><i class="material-icons left">person</i>
                                      <span class="caption">CreCom Section</span>
                                </div>
                                <form class="profile-info-form" enctype="multipart/form-data" role="form" id="formb">
                                  {{ csrf_field() }}
                                <div class="card-content">
                                  <div class="row" style="color: rgba(0, 0, 0, 0.87)">
                                      <div class="col s12 m12">
                                            <div class="input-field col s12 m12">
                                                <input type="text" name="crecomremarks" id="crecomremarks" class="right-align" value="0" placeholder="" required/>
                                                <label for="crecomremarks">Remarks</label>
                                            </div>
                                      </div>
                                      <div class="input-field col m12 s12"><i class="material-icons prefix">description</i>
                                          <select class="basic-select" name="crecomaction" id="crecomaction">
                                            <option value="Approved" selected>Approved</option>
                                            <option value="Disapproved" >Disapproved</option>
                                          </select>
                                          <label for="crecomaction">Loan Status</label>
                                      </div>
                                      <div class="input-field col m12 s12"><i class="material-icons prefix">description</i>
                                          <select class="basic-select" name="crecomptag" id="crecomptag">
                                            <option value="3" >For BOD Section</option>
                                            <option value="4" >Treasurer for Releasing</option>
                                          </select>
                                          <label for="crecomptag">Next Step/s</label>
                                      </div>
                                  </div>
                                </div>
                                <div class="card-footer">
                                  <button class="btn waves-effect waves-set" type="submit" id="crecomprocess" >Save<i class="material-icons right">save</i></button>
                                </div>
                               </form>
                            </div>
                        </div>
                        <div class="col s4">
                            <div class="card card-dash">
                                <div class="card-header z-depth-2 primary-bg"><i class="material-icons left">person</i>
                                      <span class="caption">BOD Section</span>
                                </div>
                               <form class="profile-info-form" enctype="multipart/form-data" role="form" id="formc">
                                  {{ csrf_field() }}
                                <div class="card-content">
                                  <div class="row" style="color: rgba(0, 0, 0, 0.87)">
                                      <div class="col s12 m12">
                                            <div class="input-field col s12 m12">
                                                <input type="text" name="bodremarks" id="bodremarks" class="right-align" value="0" placeholder="" required/>
                                                <label for="crecomremarks">Remarks</label>
                                            </div>
                                      </div>
                                      <div class="input-field col m12 s12"><i class="material-icons prefix">description</i>
                                          <select class="basic-select" name="bodaction" id="bodaction">
                                            <option value="Approved" selected>Approved</option>
                                            <option value="Disapproved" >Disapproved</option>
                                          </select>
                                          <label for="crecomaction">Loan Status</label>
                                      </div>
                                      <div class="input-field col m12 s12"><i class="material-icons prefix">description</i>
                                          <select class="basic-select" name="bodptag" id="bodptag">
                                            <option value="3" >Select Option</option>
                                            <option value="4" >Treasurer for Releasing</option>
                                          </select>
                                          <label for="crecomptag">Next Step/s</label>
                                      </div>
                                  </div>
                                </div>
                                <div class="card-footer">
                                  <button class="btn waves-effect waves-set" type="submit" id="bodprocess" >Save<i class="material-icons right">save</i></button>
                                </div>
                               </form>
                            </div>
                        </div>
                    </div>
                  
                  </div>
                  
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <input type="checkbox" id="filled-in" class="filled-in"/>
        <button class="btn waves-effect waves-set modal-close" >Close<i class="material-icons right">close</i></button>
    </div>
 
</div>

@endsection