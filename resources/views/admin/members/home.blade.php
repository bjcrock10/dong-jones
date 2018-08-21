@extends('admin.layout.member-dashboard')

@section('css')
    <link href="{{ asset('plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />
    <link type="text/css" rel="stylesheet" href="{{ asset('plugins/datatable/jquery.dataTables.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('plugins/datatable/select.dataTables.min.css') }}">
@endsection


@section('jsPostApp')
    
    <script type="text/javascript">
        $(document).ready(function(){
            var rowId='';
            var flag='';
            $('.modal').modal();
            $('select').material_select();
            $('.inputUSD').NumBox({ symbol: '', max:'2000000'});
            $("#forma").on("submit",function(){
               var url="/admin/createloan";
                $.ajax({
                  type:"POST",
                  url: url,
                  data: $(this).serialize(),
                  dataType:'json',
                  success: function(data){
                    $('#modal1').modal("close");
                  },
                  error: function(data){
                  }
              });
            });

            $('#loanapplicationlist').DataTable({            
               lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
                ajax: '/admin/loanapplicationpostsdata',
                stateSave: true,
                columns : [
                  { data: 'refno', name: 'refno' },
                  { data: 'name', name: 'name' },
                  { data: 'loanamount', name: 'loanamount' },
                  { data: 'overallaction', name: 'overallaction' },
                  { data: 'action', name: 'action', orderable : false, searchable: false},
                ],
              });

            $("#signaturekey1").on("blur",function(){
                 rowId='';
                 rowId = $(this).val();
                 interestamount =0;
                 interestpercent=0;
                 monthlyamort=0;
                 totalamount=0;
                 totalinterest=0;
                 var url="/admin/getcalculate/"+rowId+"/"+$("#loantype").val()+"/"+$("#loanamount").val();
                 $.ajaxSetup({
                  header:$('meta[name="_token"').attr('contnen')
                  })
                  $.ajax({
                    type:"GET",
                    url: url,
                    data: $(this).serialize(),
                    dataType:'json',
                    success: function(data){
                      interestpercent = $("#loanterms").val();
                      interestamount =data.loanamount * (1/100);
                      totalinterest= parseFloat(interestamount * interestpercent);
                      
                      totalamount = parseFloat(data.loanamount) + parseFloat(totalinterest);
                      monthlyamort = parseFloat(totalamount) / interestpercent;
                      $("#priorloan").val(data.priorloan);
                      $("#servicefee").val(data.servicefee);
                      $("#retentionfee").val(data.retentionfee);
                      $("#insurancefee").val(data.insurancefee);
                      $("#totaldeductions").val(data.totaldeductions);
                      $("#netproceeds").val(data.netproceeds);
                      $("#interestpercent").val(interestpercent);
                      $("#interestamount").val(interestamount);
                      $("#totalinterest").val(totalinterest);
                      $("#totalamount").val(totalamount);
                      $("#monthlyamort").val(monthlyamort);
                    },
                    error: function(data){

                    }
                  });
            });

            $('#loanapplicationlist').DataTable().on('click','tr .edit',function(e){
                e.preventDefault();
                 rowId='';
                 rowId = $(this).closest('tr').find('td:eq(0)').text();
                 var url="/admin/getloanhistory/"+rowId;
                 $.ajaxSetup({
                  header:$('meta[name="_token"').attr('contnen')
                  })
                  e.preventDefault(e);
                  $.ajax({
                    type:"GET",
                    url: url,
                    data: $(this).serialize(),
                    dataType:'json',
                    success: function(data){
                      $("#datefiling").val(data.datefiling);
                      $("#loanstatus").val(data.loanstatus);
                      $("#loanterms").val(data.loanterms);
                      $("#loantype").val(data.loantype);
                      $("#signaturekey2").val(data.signaturekey2);
                      $("#signaturekey1").val(data.signaturekey1);

                      $("#coid").val(data.coid);
                      $("#coname").val(data.coname);
                      $("#copassbookno").val(data.copassbookno);
                      $("#cosharecapital").val(data.cosharecapital);

                      $("#sharecapital").val(data.sharecapital);
                      $("#totalregularloan").val(data.totalregularloan);
                      $("#totalpettycashloan").val(data.totalpettycashloan);
                      $("#totalemergencyloan").val(data.totalemergencyloan);
                      $("#totalcommodityloan").val(data.totalcommodityloan);
                      $("#totalotherstloan").val(data.totalotherstloan);
                      $("#totalloans").val(data.totalloans);
                      $("#totalloanable").val(data.totalloanable);
                      $("#loanamount").val(data.loanamount);

                      $("#priorloan").val(data.priorloan);
                      $("#servicefee").val(data.servicefee);
                      $("#retentionfee").val(data.retentionfee);
                      $("#insurancefee").val(data.insurancefee);
                      $("#totaldeductions").val(data.totaldeductions);
                      $("#netproceeds").val(data.netproceeds);
                      $("#interestpercent").val(data.interestpercent);
                      $("#interestamount").val(data.interestamount);
                      $("#totalinterest").val(data.totalinterest);
                      $("#totalamount").val(data.totalamount);
                      $("#monthlyamort").val(data.monthlyamort);

                    },
                    error: function(data){

                    }
                  });
            });

            setInterval(function(){
                $('.datatable-selection-single').DataTable().ajax.reload();
              },10000);
            });
    </script>

@endsection

@section('content')

<div class="main-container">

    <div class="row">

       <div class="row">
          <div class="col s12 m6 l4 user-widget">
   
          </div>
          <div class="col s12 m6 l4 user-widget">
            <div class="card blue-grey darken-1 user-widget-type4">
              <div class="card-content center">
             <!--    <a class="btn-floating np-bg btn-flat waves-effect waves-light activator set-top-right" href="javascript:void(0)"></a> -->

           <!--   <button class="btn-floating right waves-effect set-top-right" data-target="modal1" ><i class="material-icons right">add</i></button> -->

                <img class="circle responsive-img round-img" src="../../images/placeholder/1280x853g.jpg" alt="placeholder">
                <div class="card-title center">{{ucwords(Auth::user()->name)}}</div>
                <div class="designation center grey-text text-darken-3">{{ucwords(Auth::user()->designation)}}</div>

                <div class="socialization center">
                  <a class="waves-effect waves-light btn-large"  data-target="modal1"><i class="material-icons left">add</i>Apply new loan</a>
                  <!-- <a class="btn-floating  grey darken-3 btn-flat waves-effect waves-light" href="#!"><i class="material-icons">add</i></a> --> </div>
              </div>
              <div class="card-reveal"><span class="card-title grey-text text-darken-4">{{Auth::user()->name}}<i class="material-icons right">close</i></span>
                <p>Here is some more information about this product that is only revealed once clicked on.</p>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l4 user-widget">

          </div>
        </div>
        <div class="col s12 mr-top-10">
          <div id="modal1" class="modal auto modal-fixed-footer">
             <form class="profile-info-form" enctype="multipart/form-data" role="form" id="forma">
              {{ csrf_field() }}
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
                              <input type="text" class="validate datepicker" id="datefiling" name="datefiling" value='{{date("Y-m-d")}}' placeholder="Date" required >
                              <label for="datefiling">Date of filing</label>
                            </div>
                            <div class="input-field col m6 s12"><i class="material-icons prefix">description</i>
                              <select class="validate basic-select" name="loanstatus" id="loanstatus">
                                <option value="" disabled selected>Select Loan Status</option>
                                <option value="New Loan" selected>New loan</option>
                                <option value="Renewal" selected>Renewal</option>
                              </select>
                              <label for="sex">Loan Status</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col m6 s12"><i class="material-icons prefix">date_range</i>
                              <select class="validate basic-select" name="loanterms" id="loanterms">
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
                              <select class="validate basic-select" name="loantype" id="loantype">
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
                      </div>
                      <div class="col s6">
                          <div class="row box-title">
                              <div class="col s12">
                                  <h5>Co-maker's Pledge</h5>
                              </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12"><i class="material-icons prefix">lock</i>
                              <input class="validate" type="password" id="signaturekey2" name="signaturekey2" value="" placeholder="">
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
                                                    <input type="text" name="sharecapital" class="inputUSD right-align" value="{{(Auth::user()->sharecapital)*2}}" readonly/>
                                                    <label for="sharecapitalx2">Share Capital x 2</label>
                                            </div>
                                        </li>
                                        <li class="mr-top-10">
                                          Loan Balances
                                            <ol>
                                                <li class="mr-top-10">
                                                  <div class="input-field col s12 m6">
                                                    <input type="text" name="totalregularloan" class="inputUSD right-align" value="{{Auth::user()->totalregularloan}}" readonly />
                                                    <label for="totalregularloan">Regular Loan</label>
                                                  </div>
                                                
                                                  <div class="input-field col s12 m6">
                                                    <input type="text" name="totalpettycashloan" class="inputUSD right-align" value="{{Auth::user()->totalpettycashloan}}" readonly/>
                                                    <label for="totalpettycashloan">Petty Cash Loan</label>
                                                  </div>
                                                </li>
                                                <li class="mr-top-10">
                                                  <div class="input-field col s12 m6">
                                                    <input type="text" name="totalemergencyloan" class="inputUSD right-align" value="{{Auth::user()->totalemergencyloan}}" readonly/>
                                                    <label for="totalemergencyloan">Emergency Loan</label>
                                                  </div>
                                                
                                                  <div class="input-field col s12 m6">
                                                    <input type="text" name="totalcommodityloan" class="inputUSD right-align" value="{{Auth::user()->totalcommodityloan}}" readonly/>
                                                    <label for="totalcommodityloan">Commodity Loan</label>
                                                  </div>
                                                </li>
                                                <li class="mr-top-10">
                                                  <div class="input-field col s12 m6">
                                                    <input type="text" name="otherstloan" class="inputUSD right-align" value="{{Auth::user()->otherstloan}}" readonly/>
                                                    <label for="otherstloan">Travel Loan</label>
                                                  </div>
                                                </li>
                                            </ol>
                                        </li>
                                        <li class="mr-top-10">
                                          <div class="input-field col s12 m12">
                                              <input type="text" name="totalloans" class="inputUSD right-align" value="{{(Auth::user()->totalcommodityloan + Auth::user()->totalregularloan + Auth::user()->totalpettycashloan + Auth::user()->totalemergencyloan)}}" readonly/>
                                              <label for="inputUSD">Total Loans</label>
                                          </div>
                                        </li>
                                        <li class="mr-top-10">
                                          <div class="input-field col s12 m12">
                                              <input type="text" name="totalloanable" class="inputUSD right-align" value="{{(Auth::user()->sharecapital)*2 - 100}}" readonly/>
                                              <label for="inputUSD">Total Loanable Amount</label>
                                          </div>
                                        </li>
                                      </ul>
                                  </div>
                                  <div class="col s12 m4">
                                      <ul class="collection">
                                        <li class="mr-top-10">
                                          
                                            <div class="input-field col s12"><i class="material-icons prefix"><span>&#8369;</span></i>
                                              <input type="number" class="right-align validate" id="loanamount" name="loanamount" value="">
                                              <label for="loanamount">Loan Amount</label>
                                            </div>
                                             <div class="input-field col s12"><i class="material-icons prefix">lock</i>
                                              <input class="validate" type="password" id="signaturekey1" name="signaturekey1" value="">
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
                                      </ul>
                                  </div>
                              </div>
                            
                            </div>
                            
                          </div>
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <input type="checkbox" id="filled-in" class="filled-in"/>
                  <label for="filled-in">Accept terms and agreement </label>
                              
                  <button class="btn waves-effect waves-set" type="submit" id="process" >Save<i class="material-icons right">save</i>
                  </button>
              </div>
            </form>
          </div>
   

             <div class="col s12 m12 l12">


               <div class="col s12 m4">
            <div class="card horizontal">
                <div class="card-image valign-wrapper pad-lr-20">
                    <i class="material-icons medium valign primary-text">account_balance_wallet</i>
                </div>
                <div class="card-stacked">
                    <div class="card-content right-align">
                        <div class="card-title" style="font-weight:bold;"><span>&#8369;</span> 4,000</div>
                        <p>Total Balance</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card horizontal">
                <div class="card-image valign-wrapper pad-lr-20">
                    <i class="material-icons medium valign secondary-text">calendar_today</i>
                </div>
                <div class="card-stacked">
                    <div class="card-content right-align">
                        <div class="card-title" style="font-weight:bold;"><span>&#8369;</span> 1,000</div>
                        <p>Payables for this month</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card horizontal">
                <div class="card-image valign-wrapper pad-lr-20">
                    <i class="material-icons medium valign warning-text">assignment</i>
                </div>
                <div class="card-stacked">
                    <div class="card-content right-align">
                        <div class="card-title" style="font-weight:bold;">56  </div>
                        <p>Total Application</p>
                    </div>
                </div>
            </div>
        </div>
        
                  <!-- <main class="animated"> -->
                      <ul class="dropdown-content action-ex-opts" id="generalDropDown">
                        <li><a class="waves-effect waves-set" href="#"><i class="material-icons">account_box</i><span>Account</span></a></li>
                        <li><a class="waves-effect waves-set" href="#"><i class="material-icons">local_activity</i><span>Recent Activities</span></a></li>
                        <li><a class="waves-effect waves-set" href="#"><i class="mdi mdi-wheelchair-accessibility"></i><span>Accessibility</span></a></li>
                        <li class="divider"></li>
                        <li><a class="waves-effect waves-set" href="#"><i class="material-icons">settings</i><span>All Settings</span></a></li>
                      </ul>
                      <!-- ============================-->
                      <!-- Main container-->
                      <!-- ============================-->
                      <div class="main-container">
                        <div class="row spacer">
                          <div class="col s12">
                            <div class="profile-wrapper section scrollspy">
                              <div class="profile-tabs">
                                <div class="row">
                                  <div class="col s12 m12 profile-container">
                                    <ul class="tabs user-profile-tabs">
                                      <li class="tab col s3"><a href="#about"> Loans</a></li>
                                      <li class="tab col s3"><a href="#userProfileSettings">Profile</a></li>
                                      <!-- <li class="tab col s3"><a class="load-fullcalendar" href="#history"></a></li> -->
                                      <li class="tab col s3"><a class="load-fullcalendar" href="#ledger">Loan ledger</a></li>
                                    </ul>
                                    <div id="about">
                                      <div class="row">
                                        <div class="col s12">
                                          <div class="card-panel">
                                            <div class="datatable-wrapper black-text">
                                              <table cellspacing="0" width="100%" id="loanapplicationlist" class="responsive-table datatable-selection-single display cell-border">
                                                  <thead>
                                                      <tr>
                                                          <th>Ref no.</th>
                                                          <th>Name</th>
                                                          <th>Loan Amount</th>
                                                          <th>Remarks</th>
                                                          <th>Actions</th>
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
                                    <div id="userProfileSettings">
                                      <div class="row">
                                          <div class="card-panel">
                                            <div class="row box-title">
                                              <div class="col s12">
                                                <h5>Profile Information</h5>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="input-field col m6 s12"><i class="material-icons prefix">person</i>
                                                <input class="validate" type="text" id="first-name" name="first-name" value="Robert">
                                                <label for="first-name">First Name</label>
                                              </div>
                                              <div class="input-field col m6 s12"><i class="material-icons prefix">person_outline</i>
                                                <input class="validate" type="text" id="last_name" name="last_name" value="D.">
                                                <label for="last_name">Last Name</label>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="input-field col m6 s12"><i class="material-icons prefix">edit_location</i>
                                                <input class="validate" type="text" id="addressline1" name="addressline1" value="Ring street 12">
                                                <label for="addressline1">Address line 1</label>
                                              </div>
                                              <div class="input-field col m6 s12"><i class="material-icons prefix">edit_location</i>
                                                <input class="validate" type="text" id="addressline2" name="addressline1" value="Bldg#12, House#33">
                                                <label for="addressline2">Address line 2</label>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="input-field col m6 s12"><i class="material-icons prefix">location_city</i>
                                                <input class="validate" type="text" id="city" name="city" value="NYC">
                                                <label for="city">City</label>
                                              </div>
                                              <div class="input-field col m6 s12"><i class="material-icons prefix">my_location</i>
                                                <input class="validate" type="text" id="state" name="state" value="Los Angeles">
                                                <label for="state">State</label>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="input-field col m6 s12"><i class="material-icons prefix">confirmation_number</i>
                                                <input class="validate" type="text" id="zipcode" name="zipcode" value="422003">
                                                <label for="zipcode">Zipcode</label>
                                              </div>
                                              <div class="input-field col s12 m6">
                                                <select class="basic-select" name="country" id="country">
                                                  <option value="" disabled selected>Select country</option>
                                                  <option value="us" selected>United States</option>
                                                  <option value="in">India</option>
                                                  <option value="...">...</option>
                                                  <option value="ca">Canada</option>
                                                  <option value="ch">China</option>
                                                </select>
                                                <label for="country">Country</label>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="input-field col m6 s12"><i class="material-icons prefix">email</i>
                                                <input class="validate" type="email" id="email" name="email" value="thoriseum@envato.com">
                                                <label for="email">Email</label>
                                              </div>
                                              <div class="input-field col m6 s12"><i class="material-icons prefix">phone</i>
                                                <input class="validate" type="text" id="mobile" name="mobile" value="+13040888710">
                                                <label for="mobile">Mobile</label>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="input-field col s12 right-align">
                                                <button class="btn waves-effect waves-set" type="submit" name="update_profile">Update<i class="material-icons right">save</i>
                                                </button>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                    </div>
                            
                                    <div id="ledger">
                                      <div class="row">
                                        <div class="card-panel">
                                            <h4 class="card-title">Work Experience<i class="material-icons left">work</i>
                                            </h4>
                                            <div class="card-contents">
                                              <div class="experience-list-item">
                                                <h5 class="work-title grey-text text-darken-2">CEO @Thoriseum</h5><span class="work-duration">Jan 2015 - Mar 2016</span>
                                                <p class="word-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <div class="divider"></div>
                                              </div>
                                              <div class="experience-list-item">
                                                <h5 class="work-title grey-text text-darken-2">CEO @Thoriseum</h5><span class="work-duration">Jan 2015 - Mar 2016</span>
                                                <p class="word-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <div class="divider"></div>
                                              </div>
                                              <div class="experience-list-item">
                                                <h5 class="work-title grey-text text-darken-2">CEO @Thoriseum</h5><span class="work-duration">Jan 2015 - Mar 2016</span>
                                                <p class="word-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
             </div>
        </div>
    </div>
</div>


@endsection