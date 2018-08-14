@extends('admin.layout.default')

@section('css')
    <link href="{{ asset('plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />
    <link type="text/css" rel="stylesheet" href="{{ asset('plugins/datatable/jquery.dataTables.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('plugins/datatable/select.dataTables.min.css') }}">
@endsection


@section('jsPostApp')
    
    <script src="{{ asset('script/memberhome.js') }}" type="text/javascript"></script>
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
        <div id="modal2" class="modal modal-fixed-footer  ">
                  <div class="modal-content" id="termsContent">
                      <div class="col s12">
                          <h5>Terms and Conditions for Company Name</h5>
                      </div>
                      <form name="callback" >
                          Introduction
                            These Website Standard Terms and Conditions written on this webpage shall manage your use of our website, Webiste Name accessible at Website.com.

                            These Terms will be applied fully and affect to your use of this Website. By using this Website, you agreed to accept all terms and conditions written in here. You must not use this Website if you disagree with any of these Website Standard Terms and Conditions.

                            Minors or people below 18 years old are not allowed to use this Website.

                            Intellectual Property Rights
                            Other than the content you own, under these Terms, Company Name and/or its licensors own all the intellectual property rights and materials contained in this Website.

                            You are granted limited license only for purposes of viewing the material contained on this Website.

                            Restrictions
                            You are specifically restricted from all of the following:

                            publishing any Website material in any other media;
                            selling, sublicensing and/or otherwise commercializing any Website material;
                            publicly performing and/or showing any Website material;
                            using this Website in any way that is or may be damaging to this Website;
                            using this Website in any way that impacts user access to this Website;
                            using this Website contrary to applicable laws and regulations, or in any way may cause harm to the Website, or to any person or business entity;
                            engaging in any data mining, data harvesting, data extracting or any other similar activity in relation to this Website;
                            using this Website to engage in any advertising or marketing.
                            Certain areas of this Website are restricted from being access by you and Company Name may further restrict access by you to any areas of this Website, at any time, in absolute discretion. Any user ID and password you may have for this Website are confidential and you must maintain confidentiality as well.

                            Your Content
                            In these Website Standard Terms and Conditions, “Your Content” shall mean any audio, video text, images or other material you choose to display on this Website. By displaying Your Content, you grant Company Name a non-exclusive, worldwide irrevocable, sub licensable license to use, reproduce, adapt, publish, translate and distribute it in any and all media.

                            Your Content must be your own and must not be invading any third-party's rights. Company Name reserves the right to remove any of Your Content from this Website at any time without notice.

                            No warranties
                            This Website is provided “as is,” with all faults, and Company Name express no representations or warranties, of any kind related to this Website or the materials contained on this Website. Also, nothing contained on this Website shall be interpreted as advising you.

                            Limitation of liability
                            In no event shall Company Name, nor any of its officers, directors and employees, shall be held liable for anything arising out of or in any way connected with your use of this Website whether such liability is under contract.  Company Name, including its officers, directors and employees shall not be held liable for any indirect, consequential or special liability arising out of or in any way related to your use of this Website.

                            Indemnification
                            You hereby indemnify to the fullest extent Company Name from and against any and/or all liabilities, costs, demands, causes of action, damages and expenses arising in any way related to your breach of any of the provisions of these Terms.

                            Severability
                            If any provision of these Terms is found to be invalid under any applicable law, such provisions shall be deleted without affecting the remaining provisions herein.

                            Variation of Terms
                            Company Name is permitted to revise these Terms at any time as it sees fit, and by using this Website you are expected to review these Terms on a regular basis.

                            Assignment
                            The Company Name is allowed to assign, transfer, and subcontract its rights and/or obligations under these Terms without any notification. However, you are not allowed to assign, transfer, or subcontract any of your rights and/or obligations under these Terms.

                            Entire Agreement
                            These Terms constitute the entire agreement between Company Name and you in relation to your use of this Website, and supersede all prior agreements and understandings.

                            Governing Law & Jurisdiction
                            These Terms will be governed by and interpreted in accordance with the laws of the State of Country, and you submit to the non-exclusive jurisdiction of the state and federal courts located in Country for the resolution of any disputes.
                      </form>
                  </div>
                  <div class="modal-footer">
                      <a href="javascript:void(0);" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
                      
                      <a href="javascript:void(0);" class="btn-flat" >Add</a>
                  </div>
              </div>
        <div class="col s12 mr-top-10">

                <div id="modal1" class="modal auto modal-fixed-footer">
                  <form class="profile-info-form" method="post" action="" id="forma">
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
                                    <input type="date" class="validate datepicker pck-primary pck-darken-*" id="bdate" name="bdate" value="" required />
                                    <label for="bdate">Date of filing</label>
                                  </div>
                                  <div class="input-field col m6 s12"><i class="material-icons prefix">description</i>
                                    <select class="basic-select" name="sex" id="sex">
                                      <option value="" disabled selected>Select Loan Status</option>
                                      <option value="MALE" selected>New loan</option>
                                    </select>
                                    <label for="sex">Loan Status</label>
                                  </div>
                                </div>  
                                <div class="row">
                                  <div class="input-field col s12"><i class="material-icons prefix"><span>&#8369;</span></i>
                                    <input class="validate" type="email" id="email" name="email" value="">
                                    <label for="email">Amount in figures</label>
                                  </div>
                                </div>  
                                <div class="row">
                                  <div class="input-field col m6 s12"><i class="material-icons prefix">date_range</i>
                                    <select class="basic-select" name="sex" id="sex">
                                      <option value="" disabled selected>Select Loan Status</option>
                                      <option value="MALE" selected>Three(3) months</option>
                                    </select>
                                    <label for="sex">Terms of payment</label>
                                  </div>
                                  <div class="input-field col m6 s12"><i class="material-icons prefix">assignment</i>
                                    <select class="basic-select" name="sex" id="sex">
                                      <option value="" disabled selected>Select Loan Status</option>
                                      <option value="MALE" selected>Regular loan</option>
                                    </select>
                                    <label for="sex">Type of Loan</label>
                                  </div>
                                </div> 
                                <div class="row">
                                  <div class="input-field col s12"><i class="material-icons prefix">lock</i>
                                    <input class="validate" type="email" id="email" name="email" value="">
                                    <label for="email">Signature key</label>
                                  </div>
                                </div> 
                              <!--   <div class="row">
                                    <div class="input-field col s12">
                                        <input type="checkbox" id="filled-in" class="filled-in"/>
                                        <label for="filled-in">Accept terms and agreement</label>
                                    </div>
                                </div> -->
                            </div>
                            <div class="col s6">
                                <div class="row box-title">
                                    <div class="col s12">
                                        <h5>Co-maker's Pledge</h5>
                                    </div>
                                </div>
                                <div class="row">
                                  <div class="input-field col s12"><i class="material-icons prefix">lock</i>
                                    <input class="validate" type="email" id="email" name="email" value="">
                                    <label for="email">Signature key</label>
                                  </div>
                                </div> 
                                <div class="row">
                                  <div class="input-field col m7 s12"><i class="material-icons prefix">perm_identity</i>
                                    <input class="validate" type="email" id="email" name="email" disabled="" value="">
                                    <label for="email">Comaker's ID</label>
                                  </div>
                                  <div class="input-field col m5 s12"><i class="material-icons prefix">person</i>
                                    <input class="validate" type="email" id="email" name="email" value="" disabled="">
                                    <label for="email">Co-maker Name</label>
                                  </div>
                                </div> 
                                <div class="row">
                                  <div class="input-field col m7 s12"><i class="material-icons prefix">book</i>
                                    <input class="validate" type="email" id="email" name="email" value="" disabled="">
                                    <label for="email">Passbook no.</label>
                                  </div>
                                  <div class="input-field col m5 s12"><i class="material-icons prefix"><span>&#8369;</span></i>
                                    <input class="validate" type="email" id="email" name="email" value="" disabled="">
                                    <label for="email">Amount of fixed deposit</label>
                                  </div>
                                </div>
                                
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="checkbox" id="filled-in" class="filled-in"/>
                                        <label for="filled-in">Accept terms and agreement </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row ">
<!--                             <div class="row box-title">
                                <div class="col s12">
                                    <h5>Loan Calculation</h5>
                                </div>
                            </div> -->
                            <div class="col s12">
                                 <div class="card card-dash">
                                  <div class="card-header z-depth-2 primary-bg"><i class="material-icons left"><span>&#8369;</span></i><span class="caption">Loan Calculation</span>
                                  </div>
                                  <div class="card-content">
                                    <b>
                                    <div class="row" style="color: rgba(0, 0, 0, 0.87)">
                                        <div class="col s12 m4">

                                            <ul class="collection">
                                              <li class="collection-item">Shared capital x 2 <span class="right"><span>&#8369;</span> 12,000</span></li>
                                              <li class="collection-item">
                                                Loan Balances
                                                  <ol>
                                                      <li class="mr-top-10">Regular <span class="right"> <span>&#8369;</span>12,000</span></li>
                                                      <li class="mr-top-10">Petty Cash<span class="right"> <span>&#8369;</span>12,000</span></li>
                                                      <li class="mr-top-10">Emergency<span class="right"> <span>&#8369;</span>12,000</span></li>
                                                      <li class="mr-top-10">Commodity<span class="right"> <span>&#8369;</span>12,000</span></li>
                                                      <li class="mr-top-10">Other ST:<span class="right"> <span>&#8369;</span>12,000</span></li>
                                                  </ol>
                                              </li>
                                              <li class="collection-item">Total Loan<span class="right"> <span>&#8369;</span>12,000</span></li>
                                              <li class="collection-item">Loanable Amount<span class="right"> <span>&#8369;</span>12,000</span></li>
                                            </ul>
                                        </div>
                                        <div class="col s12 m4">
                                            <ul class="collection">
                                              <li class="collection-item">Loan Amount<span class="right"><span>&#8369;</span> 12,000</span></li>
                                              <li class="collection-item">
                                                Loan Balances
                                                  <ol>
                                                      <li class="mr-top-10">Amount <span class="right"><span>&#8369;</span> 12,000</span></li>
                                                  </ol>
                                                  Insurance Fee
                                                  <ol>
                                                      <li class="mr-top-10">Amount <span class="right"><span>&#8369;</span> 12,000</span></li>
                                                  </ol>
                                                  Other Fee
                                                  <ol>
                                                      <li class="mr-top-10">Amount <span class="right"><span>&#8369;</span> 12,000</span></li>
                                                  </ol>

                                              </li>
                                              <li class="collection-item">Total Deductions<span class="right"> <span>&#8369;</span>12,000</span></li>
                                              <li class="collection-item">Net Loan Proceeds<span class="right"> <span>&#8369;</span>12,000</span></li>
                                            </ul>
                                        </div>
                                        <div class="col s12 m4">
                                            <ul class="collection">
                                              <li class="collection-item">Loan Amount <span class="right"><span>&#8369;</span> 12,000</span></li>
                                              <li class="collection-item">
                                                Loan Balances
                                                  <ol>
                                                      <li class="mr-top-10">Terms of Payment(Months) <span class="right"> 12</span></li>
                                                  </ol>
                                              </li>
                                              <li class="collection-item">
                                                Interest per month
                                                  <ol>
                                                      <li class="mr-top-10">Percent(%) <span class="right"> 12</span></li>
                                                      <li class="mr-top-10">Amount <span class="right"><span>&#8369;</span> 1200</span></li>
                                                  </ol>
                                              </li>
                                              <li class="collection-item">Total Interest Income <span class="right"> 1200</span></li>
                                              <li class="collection-item">Total Amount <span class="right"><span>&#8369;</span> 1200</span></li>
                                              <li class="collection-item">Monthly Amortization <span class="right"><span>&#8369;</span> 1200</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                  </b>
                                  </div>
                                  
                                </div>
                            </div>
                            <!-- <div class="col s12 m4">
                                 <div class="card card-dash">
                                  <div class="card-header z-depth-2 primary-bg"><i class="material-icons left">face</i><span class="caption"><a style="color: white" href="#"> Pending Loan List</a></span>
                                  </div>
                                  <div class="card-content">

                                  </div>
                                  
                                </div>
                            </div>
                            <div class="col s12 m4">
                                 <div class="card card-dash">
                                      <div class="card-header z-depth-2 primary-bg"><i class="material-icons left">face</i><span class="caption"><a style="color: white" href="#"> Pending Loan List</a></span> 
                                      </div>
                                      <div class="card-content">

                                      </div>
                                      
                                    </div>
                            </div> -->
                           
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
                  <div class="card-header z-depth-2 primary-bg"><i class="material-icons left">face</i><span class="caption"><a style="color: white" href="#"> Pending Loan List</a></span> / <span class="caption"><a href="#" style="color: white"> Approved Loan List</a></span> <button class="btn-floating right waves-effect waves-light" data-target="modal1" ><i class="material-icons right">add</i></button>
                  </div>
                  <div class="card-content">
                    <div class="datatable-wrapper black-text">
                            <table cellspacing="0" width="100%" id="memberslist" class="responsive-table datatable-selection-single display cell-border">
                                                <thead>
                                                    <tr>
                                                        <th>Reference #</th>
                                                        <th>Loan Type</th>
                                                        <th>Borrower's Name</th>
                                                        <th>Loan Amount</th>
                                                        <!-- <th>Term Date</th> -->
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                          <td></td>
                                                          <td>Tiger Nixon</td>
                                                          <td>Tiger Nixon</td>
                                                          <td>2011/04/25</td>
                                                          <!-- <td>$320,800</td> -->
                                                          <td>$320,800</td>
                                                          <td>
                                                              <div class="action-btns">
                                                                   <button class="btn-floating waves-effect waves-light" data-target="modal2" ><i class="material-icons">person</i></button>
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

@section('jsPostApp')
    
    <script type="text/javascript">
      alert('asdf')
        $('#filled-in').click(function() {
           alert('asd');
        });
    </script>
@endsection