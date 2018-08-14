@extends('admin.layout.default')

@section('css')
	<link href="{{ asset('plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />
    <link type="text/css" rel="stylesheet" href="{{ asset('plugins/datatable/jquery.dataTables.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('plugins/datatable/select.dataTables.min.css') }}">
@endsection


@section('jsPostApp')
    
    <script src="{{ asset('script/loanlist_function.js') }}" type="text/javascript"></script>
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
            
                
          <div id="modal2" class="modal auto modal-fixed-footer">
              <div class="modal-content">
                  <!-- <main class="animated"> -->
                      <ul class="dropdown-content action-ex-opts" id="generalDropDown">
                        <li><a class="waves-effect waves-set" href="#"><i class="material-icons">account_box</i><span>Account</span></a></li>
                        <li><a class="waves-effect waves-set" href="#"><i class="material-icons">local_activity</i><span>Recent Activities</span></a></li>
                        <li><a class="waves-effect waves-set" href="#"><i class="mdi mdi-wheelchair-accessibility"></i><span>Accessibility</span></a></li>
                        <li class="divider"></li>
                        <li><a class="waves-effect waves-set" href="#"><i class="material-icons">settings</i><span>All Settings</span></a></li>
                      </ul>
                      <!-- ============================-->
                      <!-- MAIN HEADER-->
                      <!-- ============================-->
    <!--                   <div class="main-header">
                        <div class="sec-page">
                          <div class="page-title">
                            <h2>User Pages - Profile</h2>
                          </div>
                          <div class="page-options"><a class="dropdown-button page-opt-dropBtn btn-floating waves-effect waves-set setWave" href="#" data-activates="generalDropDown" data-beloworigin="true" data-alignment="right" data-position="bottom" data-constrainwidth="false" data-delay="50" data-gutter="25"><i class="material-icons">perm_data_setting</i></a><a class="waves-effect waves-set page-opt-dropBtn setWave btn-floating" href="#"><i class="material-icons">chat_bubble_outline</i></a></div>
                        </div>
                      </div> -->
                      <!-- ============================-->
                      <!-- Main container-->
                      <!-- ============================-->
                      <div class="main-container">
                        <div class="row spacer">
                          <div class="col s12">
                            <div class="profile-wrapper section scrollspy">
                              <div class="profile-cover">
                                <div class="profile-coverPic" style="background-image:url('../../images/placeholder/1920x1280r.jpg');"></div>
                                <div class="profile-content">
                                  <div class="profile-left-container valign-wrapper"><a class="user-profilelink" href="javascript:void(0)"><img class="proifile-pic" src="../../images/placeholder/300x300g.jpg" alt="proifile-pic"></a>
                                    <div class="user-info">
                                      <h5 class="valign user-fullname capitalize-text">robert D.</h5>
                                      <p class="valign user-location capitalize-text">los Angeles, USA</p>
                                    </div>
                                  </div>
                                  <div class="profile-right-container valign-wrapper">
                                    <div class="fixed-action-btn horizontal click-to-toggle profileCover-options"><a class="btn-floating btn-small waves-effect waves-light menuOpt"><i class="material-icons">menu</i></a>
                                      <ul>
                                        <li><a class="btn-floating cyan lighten-3 waves-effect waves-light tooltipped" data-position="bottom" data-delay="50" data-tooltip="Change Profile Pic"><i class="material-icons">insert_photo</i></a></li>
                                        <li><a class="btn-floating amber lighten-1 waves-effect waves-light tooltipped" data-position="bottom" data-delay="50" data-tooltip="Change Cover Pic"><i class="material-icons">photo_library</i></a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="profile-tabs">
                                <div class="row">
                                  <div class="col s12 m12 l8 profile-container">
                                    <ul class="tabs user-profile-tabs">
                                      <li class="tab col s4"><a href="#about">About</a></li>
                                      <li class="tab col s4"><a href="#userProfileSettings">Settings</a></li>
                                      <li class="tab col s4"><a class="load-fullcalendar" href="#agenda">Agenda</a></li>
                                    </ul>
                                    <div id="about">
                                      <div class="row">
                                        <div class="col s12">
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
                                        <div class="col s12">
                                          <div class="card-panel">
                                            <h4 class="card-title">Education<i class="material-icons left">school</i>
                                            </h4>
                                            <div class="card-contents">
                                              <div class="experience-list-item">
                                                <h5 class="work-title grey-text text-darken-2">Master@Tutsplus</h5><span class="work-duration">Jan 2015 - Mar 2016</span>
                                                <p class="word-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <div class="divider"></div>
                                              </div>
                                              <div class="experience-list-item">
                                                <h5 class="work-title grey-text text-darken-2">Master@Tutsplus</h5><span class="work-duration">Jan 2015 - Mar 2016</span>
                                                <p class="word-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <div class="divider"></div>
                                              </div>
                                              <div class="experience-list-item">
                                                <h5 class="work-title grey-text text-darken-2">Master@Tutsplus</h5><span class="work-duration">Jan 2015 - Mar 2016</span>
                                                <p class="word-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <div class="divider"></div>
                                              </div>
                                              <div class="experience-list-item">
                                                <h5 class="work-title grey-text text-darken-2">Master@Tutsplus</h5><span class="work-duration">Jan 2015 - Mar 2016</span>
                                                <p class="word-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col s12">
                                          <div class="card-panel">
                                            <h4 class="card-title">Interest<i class="material-icons left">watch</i>
                                            </h4>
                                            <div class="card-contents hobbies-items"><a class="hobbies-item btn-floating waves-effect waves-light btn-large" href="#!"><i class="material-icons">motorcycle</i></a><a class="hobbies-item btn-floating waves-effect waves-light btn-large" href="#!"><i class="material-icons">restaurant</i></a><a class="hobbies-item btn-floating waves-effect waves-light btn-large" href="#!"><i class="material-icons">fitness_center</i></a><a class="hobbies-item btn-floating waves-effect waves-light btn-large" href="#!"><i class="material-icons">pool</i></a><a class="hobbies-item btn-floating waves-effect waves-light btn-large" href="#!"><i class="material-icons">code</i></a><a class="hobbies-item btn-floating waves-effect waves-light btn-large" href="#!"><i class="material-icons">videogame_asset</i></a></div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div id="userProfileSettings">
                                      <div class="row">
                                        <form class="col s12 profile-info-form" method="post" action="#">
                                          <div class="card-panel profile-form-cardpanel">
                                            <div class="row box-title">
                                              <div class="col s12">
                                                <h5>Apply Loan</h5>
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
                                        </form>
                                      </div>
                                    </div>
                                    <div id="agenda">
                                      <div class="row">
                                        <div class="col s12">
                                          <div class="card-panel calender-agenda">
                                            <div id="calendar"></div>
                                            <div id="external-events">
                                              <h5>Draggable external-events</h5>
                                              <div class="fc-event white-text primary-bg">Pay credit card bill</div>
                                              <div class="fc-event white-text primary-bg light">Upload new tutotial to Envato</div>
                                              <div class="fc-event white-text success-bg">Like Envato pages</div>
                                              <div class="fc-event white-text error-bg">Bring milk</div>
                                              <div class="fc-event white-text info-bg">Pay Mobile Bill</div>
                                              <p>
                                                <input id="drop-remove" type="checkbox">
                                                <label for="drop-remove">remove after drop</label>
                                              </p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col s12 m12 l4 profile-data">
                                    <div class="data-row">
                                      <div class="card card-profile-aside">
                                        <div class="card-content">
                                          <div class="collection user-connectivity">
                                            <div class="collection-item box-head"><span class="card-title">Navigation</span><a class="right modal-trigger tooltipped" href="#profile-c3Chart" data-position="left" data-tooltip="Show Chart"><i class="material-icons">show_chart</i></a>
                                              <div class="modal" id="profile-c3Chart">
                                                <div class="modal-content">
                                                  <div id="chart"></div>
                                                </div><a class="modal-action modal-close waves-effect close-profile-chart btn-floating" href="#!"><i class="material-icons">close</i></a>
                                              </div>
                                            </div><a class="collection-item" href="#!"><i class="material-icons left">person</i>My Profile</a><a class="collection-item" href="#!"><i class="material-icons left">people</i>Friends<span class="indicateBadge">249</span></a><a class="collection-item" href="#!"><i class="material-icons left">usb</i>Connections<span class="indicateBadge">59</span></a><a class="collection-item" href="#!"><i class="material-icons left">favorite</i>Followers<span class="indicateBadge">110</span></a><a class="collection-item" href="#!"><i class="material-icons left">list</i>Posts<span class="indicateBadge">12</span></a>
                                          </div>
                                        </div>
                                        <div class="card-content">
                                          <div class="collection user-skills white">
                                            <div class="collection-item box-head"><span class="card-title">Skill</span></div>
                                            <div class="collection-itm">
                                              <p class="skill-title">UX & UI</p>
                                              <p class="range-field">
                                                <input type="range" min="0" max="10" name="php" value="9">
                                              </p>
                                            </div>
                                            <div class="collection-itm">
                                              <p class="skill-title">PHP Frameworks</p>
                                              <p class="range-field">
                                                <input type="range" min="0" max="10" name="php" value="10">
                                              </p>
                                            </div>
                                            <div class="collection-itm">
                                              <p class="skill-title">JavaScript</p>
                                              <p class="range-field">
                                                <input type="range" min="0" max="10" name="php" value="8">
                                              </p>
                                            </div>
                                            <div class="collection-itm">
                                              <p class="skill-title">Mysql</p>
                                              <p class="range-field">
                                                <input type="range" min="0" max="10" name="php" value="7">
                                              </p>
                                            </div>
                                            <div class="collection-itm">
                                              <p class="skill-title">No-Sql</p>
                                              <p class="range-field">
                                                <input type="range" min="0" max="10" name="php" value="8">
                                              </p>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="card-panel user-mail"><a class="btn-flat" href="mailto:codigoforge@gmail.com">thoriseum@gmail.com<i class="material-icons left">mail</i></a><br><a class="btn-flat">+919558939971<i class="material-icons left">phone</i></a></div>
                                        <div class="card-panel user-location">
                                          <div id="map"></div>
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
                    <!-- </main>  -->
              </div>

                  
              
              <div class="modal-footer">
                <!--   <button class="btn waves-effect waves-set" type="submit" name="update_profile">Save<i class="material-icons right">save</i>
                          </button> -->

                  <a href="javascript:void(0);" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
              </div>
          </div> 

                <div id="modal1" class="modal auto modal-fixed-footer">
                  <form class="profile-info-form" method="post" action="" id="forma">
                    <div class="modal-content">
                          
                            <div class="row box-title">
                              <div class="col s12">
                                <h5>Profile Information</h5>
                              </div>
                            </div>
                            <div class="row">
                              <div class="input-field col m3 s12"><i class="material-icons prefix">person</i>
                                <input class="validate" type="text" id="fname" name="fname" value="" required>
                                <label for="fname">First Name</label>
                              </div>
                              <div class="input-field col m3 s12">
                                <input class="validate" type="text" id="lname" name="lname" value="" required>
                                <label for="lname">Last Name</label>
                              </div>
                              <div class="input-field col m3 s12">
                                <input class="validate" type="text" id="mname" name="mname" value="">
                                <label for="mname">Middle Name</label>
                              </div>
                              <div class="input-field col m3 s12">
                                <input class="validate" type="text" id="suffixname" name="suffixname" value="">
                                <label for="suffixname">Suffix Name</label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="input-field col m6 s12"><i class="material-icons prefix">edit_location</i>
                                <input class="validate" type="text" id="currentaddress" name="currentaddress" value="" required>
                                <label for="currentaddress">Address line 1</label>
                              </div>
                              <div class="input-field col m6 s12"><i class="material-icons prefix">edit_location</i>
                                <input class="validate" type="text" id="homeaddress" name="homeaddress" value="" required>
                                <label for="homeaddress">Address line 2</label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="input-field col m6 s12"><i class="material-icons prefix">card_giftcard</i>
                                <input type="date" class="validate datepicker pck-primary pck-darken-*" id="bdate" name="bdate" value="" required />
                                <label for="bdate">Birth Date</label>
                              </div>
                              <div class="input-field col m3 s12"><i class="material-icons prefix">wc</i>
                                <select class="basic-select" name="sex" id="sex">
                                  <option value="" disabled selected>Select Gender</option>
                                  <option value="MALE" selected>Male</option>
                                  <option value="FEMALE">Female</option>
                                  <option value="OTHER">Other</option>
                                </select>
                                <label for="sex">Gender</label>
                              </div>
                              <div class="input-field col m3 s12"><i class="material-icons prefix">category</i>         
                                <select class="basic-select" name="maritalstatus" id="maritalstatus">
                                  <option value="" disabled selected>Select Status</option>
                                  <option value="SINGLE" selected>Single</option>
                                  <option value="MARRIED">Married</option>
                                  <option value="WIDOW">Widow</option>
                                </select>
                                <label for="maritalstatus">Marital Status</label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="input-field col m3 s12"><i class="material-icons prefix">email</i>
                                <input class="validate" type="email" id="email" name="email" value="">
                                <label for="email">Email</label>
                              </div>
                              <div class="input-field col m3 s12"><i class="material-icons prefix">payment</i>
                                <input class="validate" type="text" id="signaturekey" name="signaturekey" value="" required>
                                 <label for="signaturekey">Signature Key</label>
                              </div>
                              <div class="input-field col m3 s12"><i class="material-icons prefix">phone</i>
                                <input class="validate" type="text" id="celno" name="celno" value="">
                                <label for="celno">Mobile</label>
                              </div>
                              <div class="input-field col m3 s12"><i class="material-icons prefix">phone</i>
                                <input class="validate" type="text" id="telno" name="telno" value="">
                                <label for="telno">Land Line</label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="input-field col m6 s12"><i class="material-icons prefix">business</i>
                                <input class="validate" type="text" id="coffice" name="coffice" value="" required>
                                <label for="coffice">Agency Name</label>
                              </div>
                              <div class="input-field col m6 s12"><i class="material-icons prefix">edit_location</i>
                                <input class="validate" type="text" id="officeaddress" name="officeaddress" value="">
                                <label for="officeaddress">Agency Address</label>
                              </div>
                            </div>
                            <div class="row">
                              <div class="input-field col m3 s12"><i class="material-icons prefix">account_box</i>
                                <input class="validate" type="text" id="designation" name="designation" value="" required>
                                <label for="designation">Designation</label>
                              </div>
                              <div class="input-field col m3 s12"><i class="material-icons prefix">how_to_reg</i>         
                                <select class="basic-select" name="employmentstatus" id="employmentstatus">
                                  <option value="" disabled selected>Select Status</option>
                                  <option value="Casual" selected>Casual</option>
                                  <option value="Permanent">Permanent</option>
                                  <option value="Job Order">Job Order</option>
                                </select>
                                <label for="employmentstatus">Employment Status</label>
                              </div>
                         
                              <div class="input-field col m3 s12"><i class="material-icons prefix">attach_money</i>
                                <input class="validate" type="text" id="csalaryamount" name="csalaryamount" value="" required>
                                <label for="csalaryamount">Curent Salary</label>
                              </div>
                              <div class="input-field col m3 s12"><i class="material-icons prefix">poll</i>
                                <input class="validate" type="text" id="cleavecredits" name="cleavecredits" value="">
                                <label for="cleavecredits">Curent Leave Credits</label>
                              </div>
                              <div class="input-field col m3 s12"><i class="material-icons prefix">insert_invitation</i>
                                <input class="validate datepicker pck-primary pck-darken-*" type="date" id="datejoined" name="datejoined" value="" required>
                                <label for="datejoined">Date Joined</label>
                              </div>
                              <div class="input-field col m3 s12"><i class="material-icons prefix">payment</i>
                                <input class="validate" type="text" id="passbookno" name="passbookno" value="">
                                <label for="passbookno">Passbook No</label>
                              </div>
                              <div class="input-field col m3 s12"><i class="material-icons prefix">payment</i>
                                <input class="validate" type="text" id="gsisno" name="gsisno" value="">
                                <label for="gsisno">GSIS No</label>
                              </div>
                               <div class="input-field col m3 s12"><i class="material-icons prefix">payment</i>
                                <input class="validate" type="text" id="tin" name="tin" value="">
                                <label for="tinno">TIN</label>
                              </div>

                            </div>
                          
                            <div class="row box-title">
                              <div class="col s12">
                                <h5>Credit Information</h5>
                              </div>
                            </div>
                             <div class="row">
                              <div class="input-field col m6 s12"><i class="material-icons prefix">attach_money</i>
                                <input class="validate" type="text" id="sharecapital" name="sharecapital" value="" required>
                                <label for="sharecapital">Share Capital</label>
                              </div>
                              <div class="input-field col m6 s12"><i class="material-icons prefix">toc</i>
                                <input class="validate" type="text" id="totalregularloan" name="totalregularloan" value="">
                                <label for="totalregularloan">Total Regular Loan</label>
                              </div>
                              <div class="input-field col m6 s12"><i class="material-icons prefix">toc</i>
                                <input class="validate" type="text" id="totalpettycashloan" name="totalpettycashloan" value="">
                                <label for="totalpettycashloan">Total Petty Cash Loan</label>
                              </div>
                              <div class="input-field col m6 s12"><i class="material-icons prefix">toc</i>
                                <input class="validate" type="text" id="totalemergencyloan" name="totalemergencyloan" value="">
                                <label for="totalemergencyloan">Total Emergency Loan</label>
                              </div>
                              <div class="input-field col m6 s12"><i class="material-icons prefix">toc</i>
                                <input class="validate" type="text" id="totalcommodityloan" name="totalcommodityloan" value="">
                                <label for="totalcommodityloan">Total Commodity Loan</label>
                              </div>
                              <div class="input-field col m6 s12"><i class="material-icons prefix">toc</i>
                                <input class="validate" type="text" id="totalotherstloan" name="totalotherstloan" value="">
                                <label for="totalotherstloan">Total Short Term Loan</label>
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
                  <div class="card-header z-depth-2 primary-bg"><i class="material-icons left">assignment_ind</i><span class="caption"><a style="color: white" href="#"> Pending Loan List</a></span> / <span class="caption"><a href="#" style="color: white"> Approved Loan List</a></span> 
                    <!-- <button class="btn-floating right waves-effect waves-light" data-target="modal1" ><i class="material-icons right">add</i></button> -->
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
                                                          <td>Pending</td>
                                                          <td>
                                                              <div class="action-btns">
                                                                   <a class="btn-floating waves-effect waves-light green" data-target="modalComment" ><i class="material-icons">check</i></a>

                                                                   <a class="btn-floating waves-effect waves-light green" data-target="modal2" ><i class="material-icons">person</i></a>

                                                                   <a class="btn-floating waves-effect waves-light" data-target="modalComment" ><i class="material-icons"></i></a>
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