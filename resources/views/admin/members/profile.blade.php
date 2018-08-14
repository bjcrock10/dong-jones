<!DOCTYPE html>
<html class="loading" lang="en">
  <!-- Item Name: Forge - Material Design Admin Template
  Version: 1.0
  Author: CodigoForge
  Author URL: https://themeforest.net/user/codigoforge
  WebSite : http://www.codigoforge.com
  -->
  <head>
    <link rel="icon" href="../images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon-precomposed" href="../images/favicon/favicon-32x32.png">
    <!-- ============================-->
    <!-- META DATA-->
    <!-- ============================-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="title" content="Forge is modern, responsive Material Admin Template.">
    <meta name="description" content="Forge Material Admin Template is modern, responsive and based on Material Design by Google.It's Material Design Admin Template powered by MaterialCSS.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, materialcss, admin pages, material CMS, forge admin template, resoponsive material admin">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="../images/favicon/favicon-32x32.png">
    <meta name="theme-color" content="#2a56c6">
    <!-- ============================-->
    <!-- TITLE-->
    <!-- ============================-->
    <title>Forge :: User Profile</title>
    <!-- ============================-->
    <!-- FONTS-->
    <!-- ============================-->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Inconsolata" type="text/css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- ============================-->
    <!-- CSS-->
    <!-- ============================-->
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/dynamic.min.css">
    <link rel="stylesheet" href="../css/markup.min.css">
    <link rel="stylesheet" href="../plugins/scrollbar/perfect-scrollbar.min.css">
    <link rel="stylesheet" href="../css/plugins/fullcalendar.css">
  </head>
  <body>
    <!-- ============================-->
    <!-- PRELOAD-->
    <!-- ============================-->
    <div id="preloader">
      <div class="preloader-center">
        <div class="dots-loader dot-circle"></div>
      </div>
    </div>
    <!-- ============================-->
    <!-- CONTENT AREA-->
    <!-- ============================-->
    <header>
      <!-- ============================-->
      <!-- TOP NAV-->
      <!-- ============================-->
      <div class="navbar-fixed full-top-nav">
        <div id="current-menu" data-menu="default">
          <nav><a class="morph menu small mob-menu button-collapse top-nav waves-effect waves-light circle hide-on-large-only" href="javascript:void(0)" id="sidebar-default-collapse" data-activates="nav-default"><span><span class="s1"></span><span class="s2"></span><span class="s3"></span></span></a>
            <div class="nav-wrapper">
              <!-- LOGO Set--><a class="animated brand-logo hide-on-large-only nav-logo" href="javascript:void(0)"><i class="material-icons logo-icon left base-text">whatshot</i><span class="left" style="margin-left:20px;">FORGE</span></a><a class="animated brand-logo hide-on-med-and-down defaultMenu-logo" href="javascript:void(0)"><i class="material-icons logo-icon left white-text">whatshot</i><span class="left" style="margin-left:20px;">FORGE</span></a>
              <!-- Left menu options at top-nav-->
              <ul class="left topnav-Menu-ls hide-on-med-and-down">
                <li><a class="morph small iconizedToggle waves-effect waves-light" href="javascript:void(0)"><span><span class="s1"></span><span class="s2"></span><span class="s3"></span></span></a>
                </li>
                <li><a href="#">Sass</a></li>
              </ul>
              <!-- Right Menu-->
              <ul class="right">
                <li class="hide-on-med-and-down"><a class="waves-effect waves-set app-search-btn" href="#"><i class="material-icons">search</i></a></li>
                <!-- MESSAGE SECTION-->
                <li class="hide-on-med-and-down"><a class="dropdown-button waves-effect waves-set" href="#" data-beloworigin="true" data-activates="top-nav-msgsweb"><i class="material-icons">email</i><span class="badge-count">5</span></a></li>
                <!-- ADMIN SETTINGS SECTION-->
                <li><a class="dropdown-button waves-effect waves-set" href="#" data-beloworigin="true" data-activates="top-nav-userProfile"><img class="circle admin-profile-img-small" src="../images/placeholder/50x50g.jpg" alt=""></a></li>
                <li class="hide-on-med-and-down"><a class="morph notify small notification-toggle-open waves-effect waves-light" href="javascript:void(0)"><span><span class="s1"></span><span class="s2"></span><span class="s3"></span></span></a>
                </li>
                <li class="hide-on-large-only"><a class="waves-effect waves-set toggle-topnav-hidden-menu" href="javascript:void(0);"><i class="material-icons">more_vert</i></a></li>
              </ul>
              <!-- Mobile Screen Nav Options-->
              <ul class="right hide-on-large-only topnav-hidden-menu hide">
                <li><a class="waves-effect waves-set app-search-btn" href="#"><i class="material-icons">search</i></a></li>
                <li class="right"><a class="waves-effect waves-set toggle-topnav-hidden-menu" href="#"><i class="material-icons">more_vert</i></a></li>
                <li class="right"><a class="morph notify small notification-toggle-open waves-effect waves-light" href="javascript:void(0)"><span><span class="s1"></span><span class="s2"></span><span class="s3"></span></span></a>
                </li>
                <li class="right"><a class="dropdown-button waves-effect waves-set" href="#" data-beloworigin="true" data-activates="top-nav-msgs"><i class="material-icons">email</i><span class="badge-count">5</span></a></li>
              </ul>
              <!-- DROP-DOWN-->
              <div class="drop-down-bucket">
                <ul class="collection dropdown-content" id="top-nav-msgsweb">
                  <li class="collection-item msg-header">
                    <ul>
                      <li class="left"><span>Messages</span><a class="right" href="#"><i class="material-icons small">create</i></a></li>
                    </ul>
                  </li>
                  <li class="collection-item msg-content">
                    <ul class="collection" id="psTopNavMmsgsWeb">
                      <li class="collection-item msg-items">
                        <!-- REDIRECTION TO User-Profile--><a class="chat-user" href="#"> <img class="circle" src="../images/placeholder/300x300t.jpg" alt=""><span class="chat-status with-badge online">10</span></a>
                        <!-- Redirection to msg/chat--><a class="chat-content" href="#"><span class="title">Jenny Jordan</span>
                          <div class="notify-desc">
                             Hey, How are you doing?</div><span class="chat-time">30 Minutes ago.</span></a>
                      </li>
                      <li class="collection-item msg-items">
                        <!-- REDIRECTION TO User-Profile--><a class="chat-user" href="#"> <img class="circle" src="../images/placeholder/300x300g.jpg" alt=""><span class="chat-status with-badge offline">5</span></a>
                        <!-- Redirection to msg/chat--><a class="chat-content" href="#"><span class="title">Jack Jordan</span>
                          <div class="notify-desc">
                             Wish you Happy birthday!</div><span class="chat-time">20 Minutes ago.</span></a>
                      </li>
                      <li class="collection-item msg-items"><a class="chat-user" href="#"> <img class="circle" src="../images/placeholder/300x300t.jpg" alt=""><span class="chat-status with-badge away">10</span></a><a class="chat-content" href="#"><span class="title">Selena Morris</span>
                          <div class="notify-desc">
                             Envato is really awesome place to be.</div><span class="chat-time">15 Minutes ago.</span></a></li>
                      <li class="collection-item msg-items"><a class="chat-user" href="#"> <img class="circle" src="../images/placeholder/300x300g.jpg" alt=""><span class="chat-status with-badge busy">10</span></a><a class="chat-content" href="#"><span class="title">Mira Dellon</span>
                          <div class="notify-desc">
                             Let meet up at my place in this weekends.</div><span class="chat-time">10 Minutes ago.</span></a></li>
                      <li class="collection-item msg-items"><a class="chat-user" href="#"> <img class="circle" src="../images/placeholder/300x300t.jpg" alt=""><span class="chat-status with-badge online">10</span></a><a class="chat-content" href="#"><span class="title">Evi Willson</span>
                          <div class="notify-desc">
                             Are you ready for party on this weekend?</div><span class="chat-time">5 Minutes ago.</span></a></li>
                    </ul>
                  </li>
                  <li class="collection-item msg-footer pos-relative"><a class="center tooltipped" href="#" data-position="top" data-tooltip="See all messages" style="padding:7px 16px;"><i class="material-icons small clear-style">more_horiz</i></a></li>
                </ul>
                <ul class="collection dropdown-content" id="top-nav-msgs">
                  <li class="collection-item msg-header">
                    <ul>
                      <li class="left"><span>Messages</span><a class="right" href="#"><i class="material-icons small">create</i></a></li>
                    </ul>
                  </li>
                  <li class="collection-item msg-content">
                    <ul class="collection" id="psTopNavMmsgs">
                      <li class="collection-item msg-items">
                        <!-- REDIRECTION TO User-Profile--><a class="chat-user" href="#"> <img class="circle" src="../images/placeholder/300x300t.jpg" alt=""><span class="chat-status with-badge online">10</span></a>
                        <!-- Redirection to msg/chat--><a class="chat-content" href="#"><span class="title">Jenny Jordan</span>
                          <div class="notify-desc">
                             Hey, How are you doing?</div><span class="chat-time">30 Minutes ago.</span></a>
                      </li>
                      <li class="collection-item msg-items">
                        <!-- REDIRECTION TO User-Profile--><a class="chat-user" href="#"> <img class="circle" src="../images/placeholder/300x300g.jpg" alt=""><span class="chat-status with-badge offline">5</span></a>
                        <!-- Redirection to msg/chat--><a class="chat-content" href="#"><span class="title">Jack Jordan</span>
                          <div class="notify-desc">
                             Wish you Happy birthday!</div><span class="chat-time">20 Minutes ago.</span></a>
                      </li>
                      <li class="collection-item msg-items"><a class="chat-user" href="#"> <img class="circle" src="../images/placeholder/300x300t.jpg" alt=""><span class="chat-status with-badge away">10</span></a><a class="chat-content" href="#"><span class="title">Selena Morris</span>
                          <div class="notify-desc">
                             Envato is really awesome place to be.</div><span class="chat-time">15 Minutes ago.</span></a></li>
                      <li class="collection-item msg-items"><a class="chat-user" href="#"> <img class="circle" src="../images/placeholder/300x300g.jpg" alt=""><span class="chat-status with-badge busy">10</span></a><a class="chat-content" href="#"><span class="title">Mira Dellon</span>
                          <div class="notify-desc">
                             Let meet up at my place in this weekends.</div><span class="chat-time">10 Minutes ago.</span></a></li>
                      <li class="collection-item msg-items"><a class="chat-user" href="#"> <img class="circle" src="../images/placeholder/300x300t.jpg" alt=""><span class="chat-status with-badge online">10</span></a><a class="chat-content" href="#"><span class="title">Evi Willson</span>
                          <div class="notify-desc">
                             Are you ready for party on this weekend?</div><span class="chat-time">5 Minutes ago.</span></a></li>
                    </ul>
                  </li>
                  <li class="collection-item msg-footer pos-relative"><a class="center tooltipped" href="#" data-position="top" data-tooltip="See all messages" style="padding:7px 16px;"><i class="material-icons small clear-style">more_horiz</i></a></li>
                </ul>
                <ul class="collection dropdown-content" id="top-nav-userProfile">
                  <li class="collection-item">
                    <div class="admin-profile-content"><img class="circle user-profile-img" src="../images/placeholder/50x50g.jpg" alt="">
                      <p class="user-name primary-text">CodigoForge</p>
                      <p class="user-designation secondary-text">CEO : Materialize-Z</p>
                      <div class="divider"></div>
                      <ul class="profile-ul">
                        <li class="profile-li"><a class="btn waves-light collection-item" href="#"><i class="material-icons left">settings</i><span class="text-items">Profile</span></a></li>
                        <li class="profile-li"><a class="btn waves-light collection-item" href="#"><i class="material-icons left">inbox</i><span class="badge right secondary-bg lighten-2 new">5</span><span class="text-items">Inbox</span></a></li>
                        <li class="profile-li"><a class="btn waves-light collection-item" href="#"><i class="material-icons left">power_settings_new</i><span class="text-items">Sign Out</span></a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- Searchbar-->
              <form class="inactive animated" id="app-search">
                <div class="input-field">
                  <input type="search" id="search">
                  <label class="label-icon" for="search"><i class="material-icons">search</i></label><i class="material-icons app-search-Cls">close</i>
                </div>
              </form>
            </div>
          </nav>
        </div>
      </div>
      <!-- ============================-->
      <!-- Vertical Navigation (Default and Iconized)-->
      <!-- ============================-->
      <div class="vertical-navigations animated">
        <ul class="side-nav fixed animated collapsible collapsible-accordion" id="nav-default">
          <li class="logo"><a class="brand-logo hide-on-large-only" id="logo-container" href="/"></a></li>
          <li class="usr-profile">
            <div class="usr-profile-header"><a href="#"><img class="circle" src="../images/placeholder/50x50g.jpg" alt="Thor"></a></div>
            <ul class="user-options">
              <li class="waves-effect waves-set"><span class="usr-name">Johnson Doe</span></li>
              <li class="user-option-item waves-effect waves-set"><a class="btn-floating btn-small waves-effect waves-light" href="#"><i class="material-icons">lock</i></a></li>
              <li class="user-option-item waves-effect waves-set"><a class="btn-floating btn-small waves-effect waves-light" href="#"><i class="material-icons">settings</i></a></li>
              <li class="user-option-item waves-effect waves-set"><a class="btn-floating btn-small waves-effect waves-light" href="#"><i class="material-icons">power_settings_new</i></a></li>
            </ul>
          </li>
          <li><a class="collapsible-header no-col-body waves-effect waves-set" href="index.html"><i class="material-icons">dashboard</i><span>Dashboard</span></a></li>
          <li class="navigation-header"><span class="no-col-body">Card Widgets</span><i class="material-icons tooltipped" data-position="right" data-delay="50" data-tooltip="CSS Properties">more_horiz</i>
          </li>
          <li><a class="collapsible-header no-col-body waves-effect waves-set" href="card-statistic.html"><i class="material-icons">show_chart</i><span>Statistic Card</span></a></li>
          <li><a class="collapsible-header no-col-body waves-effect waves-set" href="card-weather.html"><i class="material-icons">wb_sunny</i><span>Weather Card</span></a></li>
          <li><a class="collapsible-header no-col-body waves-effect waves-set" href="card-feeds.html"><i class="material-icons">view_list</i><span>Feeds Card</span></a></li>
          <li><a class="collapsible-header no-col-body waves-effect waves-set" href="card-travel.html"><i class="material-icons">panorama_fish_eye</i><span>Travel Card</span></a></li>
          <li class="navigation-header"><span class="no-col-body">CSS Properties</span><i class="material-icons tooltipped" data-position="right" data-delay="50" data-tooltip="CSS Properties">more_horiz</i>
          </li>
          <li><a class="collapsible-header no-col-body waves-effect waves-set" href="materialize-color.html"><i class="material-icons">color_lens</i><span>Color</span></a></li>
          <li><a class="collapsible-header no-col-body waves-effect waves-set" href="materialize-css-media.html"><i class="material-icons">photo_filter</i><span>CSS Media</span></a></li>
          <li><a class="collapsible-header no-col-body waves-effect waves-set" href="materialize-grid.html"><i class="material-icons">grid_on</i><span>Grid</span></a></li>
          <li><a class="collapsible-header waves-effect waves-set" href="#"><i class="material-icons">list</i><span>Tables</span><i class="material-icons mdi-navigation-chevron-left">keyboard_arrow_left</i></a>
            <div class="collapsible-body">
              <ul>
                <li class="menu-item"><a class="waves-effect waves-set" href="materialize-table.html"><span>Materialize Table</span></a></li>
                <li class="menu-item">
                  <ul class="collapsible" data-collapsible="expandable">
                    <li>
                      <div class="collapsible-header waves-effect waves-set"><span>Datatables</span><i class="material-icons mdi-navigation-chevron-left">keyboard_arrow_left</i></div>
                      <div class="collapsible-body">
                        <ul>
                          <li><a class="waves-effect waves-set" href="datatable-basic.html"><span>Basic Table</span></a></li>
                          <li><a class="waves-effect waves-set" href="datatable-basic-style.html"><span>Basic Style</span></a></li>
                          <li><a class="waves-effect waves-set" href="datatable-ordering.html"><span>Sort Datatable</span></a></li>
                          <li><a class="waves-effect waves-set" href="datatable-advance.html"><span>Advance Datatable</span></a></li>
                          <li><a class="waves-effect waves-set" href="datatable-template.html"><span>Datatable Templates</span></a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </li>
          <li><a class="collapsible-header no-col-body waves-effect waves-set" href="materialize-helper.html"><i class="material-icons">help</i><span>Helpers</span></a></li>
          <li><a class="collapsible-header no-col-body waves-effect waves-set" href="materialize-shadow.html"><i class="material-icons">queue</i><span>Shadow</span></a></li>
          <li><a class="collapsible-header no-col-body waves-effect waves-set" href="materialize-typography.html"><i class="material-icons">text_format</i><span>Typography</span></a></li>
          <li><a class="collapsible-header no-col-body waves-effect waves-set" href="materialize-icons.html"><i class="material-icons">gesture</i><span>Icon</span></a></li>
          <li class="navigation-header"><span class="no-col-body">Components</span><i class="material-icons tooltipped" data-position="right" data-delay="50" data-tooltip="Components">more_horiz</i>
          </li>
          <li><a class="collapsible-header waves-effect waves-set" href="#"><i class="material-icons">card_giftcard</i><span>UI Elements</span><i class="material-icons mdi-navigation-chevron-left">keyboard_arrow_left</i></a>
            <div class="collapsible-body">
              <ul>
                <li class="menu-item"><a class="waves-effect waves-set" href="materialize-badge.html"><span>Badges</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="materialize-button.html"><span>Button</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="materialize-breadcrumbs.html"><span>Breadcrumbs</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="materialize-cards.html"><span>Cards</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="materialize-chips.html"><span>Chips</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="materialize-collection.html"><span>Collections</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="materialize-pagination.html"><span>Pagination</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="materialize-preloader.html"><span>Preloader</span></a></li>
              </ul>
            </div>
          </li>
          <li><a class="collapsible-header waves-effect waves-set" href="#"><i class="material-icons">library_books</i><span>Advance UI</span><i class="material-icons mdi-navigation-chevron-left">keyboard_arrow_left</i></a>
            <div class="collapsible-body">
              <ul>
                <li class="menu-item"><a class="waves-effect waves-set" href="materialize-collapsible.html"><span>Collapsible</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="materialize-dialogs.html"><span>Dialogs</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="materialize-dropdown.html"><span>Dropdown</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="materialize-media.html"><span>Media</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="materialize-carousel.html"><span>Carousel</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="materialize-modals.html"><span>Modals</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="materialize-pushpin.html"><span>PushPin</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="materialize-scrollFire.html"><span>ScrollFire</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="materialize-tabs.html"><span>Tabs</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="materialize-transitions.html"><span>Transactions</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="materialize-waves.html"><span>Waves</span></a></li>
              </ul>
            </div>
          </li>
          <li><a class="collapsible-header waves-effect waves-set" href="#"><i class="material-icons">transform</i><span>Form Components</span><i class="material-icons mdi-navigation-chevron-left">keyboard_arrow_left</i></a>
            <div class="collapsible-body">
              <ul>
                <li class="menu-item"><a class="waves-effect waves-set" href="form-basic-components.html"><span>Basic Inputs</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="form-checkbox-radios.html"><span>Checkboxes & Radios</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="form-extended-control.html"><span>Extended controls</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="form-select.html"><span>Select inputs</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="form-taginput.html"><span>Tag Input</span></a></li>
                <li class="menu-item">
                  <ul class="collapsible" data-collapsible="expandable">
                    <li>
                      <div class="collapsible-header waves-effect waves-set"><span>Advance Inputs</span><i class="material-icons mdi-navigation-chevron-left">keyboard_arrow_left</i></div>
                      <div class="collapsible-body">
                        <ul>
                          <li><a class="waves-effect waves-set" href="editor-materializenote.html"><span>MaterializeNote</span></a></li>
                          <li><a class="waves-effect waves-set" href="editor-ckeditor.html"><span>CK Editor</span></a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </li>
          <li><a class="collapsible-header waves-effect waves-set" href="#"><i class="material-icons">insert_chart</i><span>Charts</span><i class="material-icons mdi-navigation-chevron-left">keyboard_arrow_left</i></a>
            <div class="collapsible-body">
              <ul>
                <li class="menu-item">
                  <ul class="collapsible" data-collapsible="expandable">
                    <li>
                      <div class="collapsible-header waves-effect waves-set"><span>Bar-Charts</span><i class="material-icons mdi-navigation-chevron-left">keyboard_arrow_left</i></div>
                      <div class="collapsible-body">
                        <ul>
                          <li><a class="waves-effect waves-set" href="google-barchart.html"><span>Google Chart</span></a></li>
                          <li><a class="waves-effect waves-set" href="c3-barchart.html"><span>c3 Chart</span></a></li>
                          <li><a class="waves-effect waves-set" href="chartjs-barchart.html"><span>Chart Js</span></a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <ul class="collapsible" data-collapsible="expandable">
                    <li>
                      <div class="collapsible-header waves-effect waves-set"><span>Line-Charts</span><i class="material-icons mdi-navigation-chevron-left">keyboard_arrow_left</i></div>
                      <div class="collapsible-body">
                        <ul>
                          <li><a class="waves-effect waves-set" href="google-linechart.html"><span>Google Chart</span></a></li>
                          <li><a class="waves-effect waves-set" href="c3-linechart.html"><span>c3 Chart</span></a></li>
                          <li><a class="waves-effect waves-set" href="chartjs-linechart.html"><span>Chart Js</span></a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <ul class="collapsible" data-collapsible="expandable">
                    <li>
                      <div class="collapsible-header waves-effect waves-set"><span>Area Charts</span><i class="material-icons mdi-navigation-chevron-left">keyboard_arrow_left</i></div>
                      <div class="collapsible-body">
                        <ul>
                          <li><a class="waves-effect waves-set" href="google-areachart.html"><span>Google Chart</span></a></li>
                          <li><a class="waves-effect waves-set" href="c3-areachart.html"><span>c3 Chart</span></a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <ul class="collapsible" data-collapsible="expandable">
                    <li>
                      <div class="collapsible-header waves-effect waves-set"><span>Pie Charts</span><i class="material-icons mdi-navigation-chevron-left">keyboard_arrow_left</i></div>
                      <div class="collapsible-body">
                        <ul>
                          <li><a class="waves-effect waves-set" href="google-piechart.html"><span>Google Chart</span></a></li>
                          <li><a class="waves-effect waves-set" href="c3-piechart.html"><span>c3 Chart</span></a></li>
                          <li><a class="waves-effect waves-set" href="chartjs-pie.html"><span>Chart Js</span></a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <ul class="collapsible" data-collapsible="expandable">
                    <li>
                      <div class="collapsible-header waves-effect waves-set"><span>Scatter Charts</span><i class="material-icons mdi-navigation-chevron-left">keyboard_arrow_left</i></div>
                      <div class="collapsible-body">
                        <ul>
                          <li><a class="waves-effect waves-set" href="google-scatterchart.html"><span>Google Chart</span></a></li>
                          <li><a class="waves-effect waves-set" href="chartjs-scatter.html"><span>Chart JS</span></a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <ul class="collapsible" data-collapsible="expandable">
                    <li>
                      <div class="collapsible-header waves-effect waves-set"><span>Extra</span><i class="material-icons mdi-navigation-chevron-left">keyboard_arrow_left</i></div>
                      <div class="collapsible-body">
                        <ul>
                          <li><a class="waves-effect waves-set" href="google-columnchart.html"><span>Google Column Chart</span></a></li>
                          <li><a class="waves-effect waves-set" href="google-combochart.html"><span>Google Combo Chart</span></a></li>
                          <li><a class="waves-effect waves-set" href="google-geocharts.html"><span>Google Geochart</span></a></li>
                          <li><a class="waves-effect waves-set" href="c3-more.html"><span>C3 Extra</span></a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </li>
          <li><a class="collapsible-header waves-effect waves-set" href="#"><i class="material-icons">invert_colors</i><span>Pickers</span><i class="material-icons mdi-navigation-chevron-left">keyboard_arrow_left</i></a>
            <div class="collapsible-body">
              <ul>
                <li class="menu-item"><a class="waves-effect waves-set" href="picker-datetime.html"><span>Date-Time</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="picker-color.html"><span>Color</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="picker-location.html"><span>Location</span></a></li>
              </ul>
            </div>
          </li>
          <li><a class="collapsible-header no-col-body waves-effect waves-set" href="nestable.html"><i class="material-icons">format_align_right</i><span>Nestable</span></a></li>
          <li><a class="collapsible-header no-col-body waves-effect waves-set" href="timeline.html"><i class="material-icons">timeline</i><span>Timeline</span></a></li>
          <li><a class="collapsible-header waves-effect waves-set" href="#"><i class="material-icons">photo_library</i><span>Gallary</span><i class="material-icons mdi-navigation-chevron-left">keyboard_arrow_left</i></a>
            <div class="collapsible-body">
              <ul>
                <li class="menu-item"><a class="waves-effect waves-set" href="image-effects.html"><span>Miketricking Effects</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="material-box-gallery.html"><span>Material Box</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="magnific-popup.html"><span>Magnific Popup</span></a></li>
              </ul>
            </div>
          </li>
          <li><a class="collapsible-header waves-effect waves-set" href="#"><i class="material-icons">security</i><span>Authentication & Guard</span><i class="material-icons mdi-navigation-chevron-left">keyboard_arrow_left</i></a>
            <div class="collapsible-body">
              <ul>
                <li class="menu-item"><a class="waves-effect waves-set" href="user-signin.html"><span>Sign In</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="user-signin2.html"><span>Sign In (v2)</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="user-signup.html"><span>Sign Up</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="user-signup2.html"><span>Sign Up (v2)</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="user-lockscreen.html"><span>Lock Screen</span></a></li>
              </ul>
            </div>
          </li>
          <li><a class="collapsible-header waves-effect waves-set" href="#"><i class="material-icons">format_bold</i><span>Blog</span><i class="material-icons mdi-navigation-chevron-left">keyboard_arrow_left</i></a>
            <div class="collapsible-body">
              <ul>
                <li class="menu-item"><a class="waves-effect waves-set" href="blog.html"><span>Blog List View</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="blog-detail.html"><span>Blog Detail View</span></a></li>
              </ul>
            </div>
          </li>
          <li><a class="collapsible-header waves-effect waves-set active current" href="#"><i class="material-icons">person</i><span>Users</span><i class="material-icons mdi-navigation-chevron-left open-aside">keyboard_arrow_left</i></a>
            <div class="collapsible-body">
              <ul>
                <li class="menu-item"><a class="waves-effect waves-set active current" href="user-profile.html"><span>User Profile</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="user-cards.html"><span>Profile Cards</span></a></li>
              </ul>
            </div>
          </li>
          <li><a class="collapsible-header waves-effect waves-set" href="#"><i class="material-icons">pages</i><span>Extra</span><i class="material-icons mdi-navigation-chevron-left">keyboard_arrow_left</i></a>
            <div class="collapsible-body">
              <ul>
                <li class="menu-item"><a class="waves-effect waves-set" href="404.html"><span>404</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="403.html"><span>403</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="500.html"><span>500</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="404-type2.html"><span>404 v2</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="403-type2.html"><span>403 v2</span></a></li>
                <li class="menu-item"><a class="waves-effect waves-set" href="500-type2.html"><span>500 v2</span></a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
      <!-- ============================-->
      <!-- Horizontal Navigation (Default and Iconized)-->
      <!-- ============================-->
      <div class="horizontal-navigations navbar-fixed full-top-nav">
        <nav class="hide-on-med-and-down">
          <div class="nav-wrapper">
            <ul class="iconized left">
              <li class="menu-item"><a class="menu-link waves-effect waves-set" href="index.html"><i class="material-icons menu-icon left">dashboard</i><span class="menu-span">Dashboard</span></a></li>
              <li class="menu-item"><a class="open_hor_sub menu-link waves-effect waves-set" href="#"><i class="material-icons menu-icon left">wb_sunny</i><span class="menu-span">Widgets</span><i class="material-icons menu-icon right">arrow_drop_down</i></a>
                <div class="hor_sub standard hide">
                  <ul class="collection collapsible collapsible-accordion">
                    <li class="collection-item"><a class="waves-effect waves-set" href="card-statistic.html">Statistic Card<i class="material-icons left">show_chart</i></a></li>
                    <li class="collection-item"><a class="waves-effect waves-set" href="card-weather.html">Weather Card<i class="material-icons left">wb_sunny</i></a></li>
                    <li class="collection-item"><a class="waves-effect waves-set" href="card-feeds.html">Feeds Card<i class="material-icons left">view_list</i></a></li>
                    <li class="collection-item"><a class="waves-effect waves-set" href="card-travel.html">Travel Card<i class="material-icons left">panorama_fish_eye</i></a></li>
                  </ul>
                </div>
              </li>
              <li class="menu-item"><a class="open_hor_sub menu-link waves-effect waves-set" href="#"><i class="material-icons menu-icon left">insert_chart</i><span class="menu-span">CSS Properties</span><i class="material-icons menu-icon right">arrow_drop_down</i></a>
                <div class="hor_sub standard hide">
                  <ul class="collection collapsible collapsible-accordion">
                    <li class="collection-item"><a class="waves-effect waves-set" href="materialize-color.html">Color<i class="material-icons left">color_lens</i></a></li>
                    <li class="collection-item"><a class="waves-effect waves-set" href="materialize-css-media.html">CSS Media<i class="material-icons left">photo_filter</i></a></li>
                    <li class="collection-item"><a class="waves-effect waves-set" href="materialize-grid.html">Grid<i class="material-icons left">grid_on</i></a></li>
                    <li class="collection-item"><a class="collapsible-header waves-effect waves-set" href="#">Tables<i class="mdi mdi-table left"></i><i class="material-icons right">arrow_drop_down</i></a>
                      <div class="collapsible-body">
                        <ul>
                          <li><a class="waves-effect waves-set" href="materialize-table.html">Materialize Table<i class="material-icons left">list</i></a></li>
                          <li><a class="waves-effect waves-set" href="datatable-basic.html">Datatable Basic Table<i class="material-icons left">format_list_bulleted</i></a></li>
                          <li><a class="waves-effect waves-set" href="datatable-basic-style.html">Datatable Basic Style<i class="material-icons left">format_paint</i></a></li>
                          <li><a class="waves-effect waves-set" href="datatable-ordering.html">Datatable Sort Datatable<i class="material-icons left">sort</i></a></li>
                          <li><a class="waves-effect waves-set" href="datatable-advance.html">Advance Datatable<i class="material-icons left">star</i></a></li>
                          <li><a class="waves-effect waves-set" href="datatable-template.html">Datatable Templates<i class="material-icons left">style</i></a></li>
                        </ul>
                      </div>
                    </li>
                    <li class="collection-item"><a class="waves-effect waves-set" href="materialize-helper.html">Helpers<i class="material-icons left">help</i></a></li>
                    <li class="collection-item"><a class="waves-effect waves-set" href="materialize-shadow.html">Shadow<i class="material-icons left">queue</i></a></li>
                    <li class="collection-item"><a class="waves-effect waves-set" href="materialize-typography.html">Typography<i class="material-icons left">text_format</i></a></li>
                    <li class="collection-item"><a class="waves-effect waves-set" href="materialize-icons.html">Icon<i class="material-icons left">gesture</i></a></li>
                  </ul>
                </div>
              </li>
              <li class="menu-item"><a class="open_hor_sub menu-link waves-effect waves-set" href="#"><i class="material-icons menu-icon left">format_paint</i><span class="menu-span">Components</span><i class="material-icons menu-icon right">arrow_drop_down</i></a>
                <div class="hor_sub full hide">
                  <ul class="collection">
                    <li class="collection-header">
                      <h6>UI Elements</h6>
                    </li>
                    <li class="collection-item"><a class="waves-effect waves-set" href="materialize-badge.html">Badges<i class="material-icons left">turned_in</i></a></li>
                    <li class="collection-item"><a class="waves-effect waves-set" href="materialize-button.html">Button<i class="material-icons left">touch_app</i></a></li>
                    <li class="collection-item"><a class="waves-effect waves-set" href="materialize-breadcrumbs.html">Breadcrumbs<i class="material-icons left">swap_horiz</i></a></li>
                    <li class="collection-item"><a class="waves-effect waves-set" href="materialize-cards.html">Cards<i class="material-icons left">card_membership</i></a></li>
                    <li class="collection-item"><a class="waves-effect waves-set" href="materialize-chips.html">Chips<i class="material-icons left">label_outline</i></a></li>
                    <li class="collection-item"><a class="waves-effect waves-set" href="materialize-collection.html">Collections<i class="material-icons left">view_list</i></a></li>
                    <li class="collection-item"><a class="waves-effect waves-set" href="materialize-pagination.html">Pagination<i class="material-icons left">last_page</i></a></li>
                    <li class="collection-item"><a class="waves-effect waves-set" href="materialize-preloader.html">Preloader<i class="material-icons left">cached</i></a></li>
                    <li class="collection-item"><a class="dropdown-button waves-effect waves-set" href="#" data-activates="form-components">Form Components<i class="material-icons left">transform</i><i class="material-icons right">arrow_drop_down</i></a>
                      <ul class="dropdown-content" id="form-components">
                        <li><a class="waves-effect waves-set" href="form-basic-components.html">Basic Inputs<i class="material-icons left">format_align_center</i></a></li>
                        <li><a class="waves-effect waves-set" href="form-checkbox-radios.html">Checkboxes & Radios<i class="material-icons left">check_box</i></a></li>
                        <li><a class="waves-effect waves-set" href="form-extended-control.html">Extended Control<i class="material-icons left">more</i></a></li>
                        <li><a class="waves-effect waves-set" href="form-select.html">Select Inputs<i class="material-icons left">select_all</i></a></li>
                        <li><a class="waves-effect waves-set" href="form-taginput.html">Tag Input<i class="material-icons left">label_outline</i></a></li>
                        <li><a class="waves-effect waves-set">Advance Input<i class="material-icons left">power_input</i></a></li>
                      </ul>
                    </li>
                  </ul>
                  <ul class="collection">
                    <li class="collection-header">
                      <h6>Advance UI</h6>
                    </li>
                    <li class="collection-item"><a class="waves-effect waves-set" href="materialize-collapsible.html">Collapsible<i class="material-icons left">collections</i></a></li>
                    <li class="collection-item"><a class="waves-effect waves-set" href="materialize-dialogs.html">Dialogs<i class="material-icons left">notifications_active</i></a></li>
                    <li class="collection-item"><a class="waves-effect waves-set" href="materialize-dropdown.html">Dropdown<i class="material-icons left">arrow_drop_down_circle</i></a></li>
                    <li class="collection-item"><a class="waves-effect waves-set" href="materialize-media.html">Media<i class="material-icons left">perm_media</i></a></li>
                    <li class="collection-item"><a class="waves-effect waves-set" href="materialize-carousel.html">Carousel<i class="material-icons left">view_carousel</i></a></li>
                    <li class="collection-item"><a class="waves-effect waves-set" href="materialize-modals.html">Modals<i class="material-icons left">laptop_windows</i></a></li>
                    <li class="collection-item"><a class="waves-effect waves-set" href="materialize-pushpin.html">PushPin<i class="material-icons left">view_list</i></a></li>
                    <li class="collection-item"><a class="waves-effect waves-set" href="materialize-scrollFire.html">ScrollFire<i class="material-icons left">all_inclusive</i></a></li>
                    <li class="collection-item"><a class="waves-effect waves-set" href="materialize-tabs.html">Tabs<i class="material-icons left">label</i></a></li>
                  </ul>
                  <ul class="collection">
                    <li class="collection-item"><a class="waves-effect waves-set" href="materialize-transitions.html">Transactions<i class="material-icons left">stars</i></a></li>
                    <li class="collection-item"><a class="waves-effect waves-set" href="materialize-waves.html">Waves<i class="material-icons left">polymer</i></a></li>
                    <li class="collection-header">
                      <h6>Form Component</h6>
                    </li>
                    <li class="collection-item"><a class="waves-effect waves-set" href="form-basic-components.html">Basic Inputs<i class="material-icons left">format_align_center</i></a></li>
                    <li class="collection-item"><a class="waves-effect waves-set" href="form-checkbox-radios.html">Checkboxes & Radios<i class="material-icons left">check_box</i></a></li>
                    <li class="collection-item"><a class="waves-effect waves-set" href="form-extended-control.html">Extended controls<i class="material-icons left">more</i></a></li>
                    <li class="collection-item"><a class="waves-effect waves-set" href="form-select.html">Select inputs<i class="material-icons left">select_all</i></a></li>
                    <li class="collection-item"><a class="waves-effect waves-set" href="form-taginput.html">Tag Input<i class="material-icons left">label_outline</i></a></li>
                    <li class="collection-item"><a class="dropdown-button waves-effect waves-set" href="#" data-activates="advance-inputs">Advance Inputs<i class="material-icons left">transform</i><i class="material-icons right">arrow_drop_down</i></a>
                      <ul class="dropdown-content" id="advance-inputs">
                        <li><a class="waves-effect waves-set" href="editor-materializenote.html">MaterializeNote<i class="material-icons left">note</i></a></li>
                        <li><a class="waves-effect waves-set" href="editor-ckeditor.html">CK Editor<i class="material-icons left">keyboard</i></a></li>
                      </ul>
                    </li>
                    <li class="collection-item"><a class="dropdown-button waves-effect waves-set" href="#" data-activates="picker-inputs">Pickers<i class="material-icons left">invert_colors</i><i class="material-icons right">arrow_drop_down</i></a>
                      <ul class="dropdown-content" id="picker-inputs">
                        <li class="menu-item"><a class="waves-effect waves-set" href="picker-datetime.html">Date-Time<i class="material-icons left">date_range</i></a></li>
                        <li class="menu-item"><a class="waves-effect waves-set" href="picker-color.html">Color<i class="material-icons left">color_lens</i></a></li>
                        <li class="menu-item"><a class="waves-effect waves-set" href="picker-location.html">Location<i class="material-icons left">pin_drop</i></a></li>
                      </ul>
                    </li>
                  </ul>
                  <ul class="collection">
                    <li class="collection-header">
                      <h6>Charts</h6>
                    </li>
                    <li class="collection-item"><a class="dropdown-button waves-effect waves-set" href="#" data-activates="bar-charts-collection">Bar-Charts<i class="mdi mdi-chart-bar left"></i><i class="material-icons right">arrow_drop_down</i></a>
                      <ul class="dropdown-content" id="bar-charts-collection">
                        <li><a class="waves-effect waves-set" href="google-barchart.html">Google Chart<i class="mdi mdi-google left"></i></a></li>
                        <li><a class="waves-effect waves-set" href="c3-barchart.html">c3 Chart<i class="material-icons left">multiline_chart</i></a></li>
                        <li><a class="waves-effect waves-set" href="chartjs-barchart.html">ChartJs<i class="mdi mdi-image-filter-hdr left"></i></a></li>
                      </ul>
                    </li>
                    <li class="collection-item"><a class="dropdown-button waves-effect waves-set" href="#" data-activates="line-charts-collection">Line-Charts<i class="mdi mdi-chart-line left"></i><i class="material-icons right">arrow_drop_down</i></a>
                      <ul class="dropdown-content" id="line-charts-collection">
                        <li><a class="waves-effect waves-set" href="google-linechart.html">Google Chart<i class="mdi mdi-google left"></i></a></li>
                        <li><a class="waves-effect waves-set" href="c3-linechart.html">c3 Chart<i class="material-icons">multiline_chart</i></a></li>
                        <li><a class="waves-effect waves-set" href="chartjs-linechart.html">ChartJs<i class="mdi mdi-image-filter-hdr left"></i></a></li>
                      </ul>
                    </li>
                    <li class="collection-item"><a class="dropdown-button waves-effect waves-set" href="#" data-activates="area-charts-collection">Line-Charts<i class="mdi mdi-chart-areaspline left"></i><i class="material-icons right">arrow_drop_down</i></a>
                      <ul class="dropdown-content" id="area-charts-collection">
                        <li><a class="waves-effect waves-set" href="google-areachart.html">Google Chart<i class="mdi mdi-google left"></i></a></li>
                        <li><a class="waves-effect waves-set" href="c3-areachart.html">c3 Chart<i class="material-icons left">multiline_chart</i></a></li>
                      </ul>
                    </li>
                    <li class="collection-item"><a class="dropdown-button waves-effect waves-set" href="#" data-activates="pieChart-charts-collection">Line-Charts<i class="material-icons left">pie_chart</i><i class="material-icons right">arrow_drop_down</i></a>
                      <ul class="dropdown-content" id="pieChart-charts-collection">
                        <li><a class="waves-effect waves-set" href="google-piechart.html">Google Chart<i class="mdi mdi-google left"></i></a></li>
                        <li><a class="waves-effect waves-set" href="c3-piechart.html">c3 Chart<i class="material-icons left">multiline_chart</i></a></li>
                        <li><a class="waves-effect waves-set" href="chartjs-pie.html">Chart Js<i class="mdi mdi-image-filter-hdr left"></i></a></li>
                      </ul>
                    </li>
                    <li class="collection-item"><a class="dropdown-button waves-effect waves-set" href="#" data-activates="scatterChart-charts-collection">Scatter Charts<i class="mdi mdi-chart-scatterplot-hexbin left"></i><i class="material-icons right">arrow_drop_down</i></a>
                      <ul class="dropdown-content" id="scatterChart-charts-collection">
                        <li><a class="waves-effect waves-set" href="google-scatterchart.html">Google Chart<i class="mdi mdi-google left"></i></a></li>
                        <li><a class="waves-effect waves-set" href="chartjs-scatter.html">Chart JS<i class="mdi mdi-image-filter-hdr left"></i></a></li>
                      </ul>
                    </li>
                    <li class="collection-item"><a class="dropdown-button waves-effect waves-set" href="#" data-activates="Extra-charts-collection">Extra<i class="material-icons left">more</i><i class="material-icons right">arrow_drop_down</i></a>
                      <ul class="dropdown-content" id="Extra-charts-collection">
                        <li><a class="waves-effect waves-set" href="google-columnchart.html">Google Column Chart<i class="material-icons left">view_column</i></a></li>
                        <li><a class="waves-effect waves-set" href="google-combochart.html">Google Combo Chart<i class="mdi mdi-chart-gantt left"></i></a></li>
                        <li><a class="waves-effect waves-set" href="google-geocharts.html">Google Geochart<i class="mdi mdi-earth left"></i></a></li>
                        <li><a class="waves-effect waves-set" href="c3-more.html">C3 Extra<i class="material-icons left">multiline_chart</i></a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="other-verticalSections">
        <!-- ============================-->
        <!-- THEME SETTING-->
        <!-- ============================-->
        <div class="themeSetting z-depth-1" id="themeOptions"><a class="btn btn-small toggleThemesetting" href="#"><i class="material-icons">settings</i></a>
          <div class="settings">
            <div class="navigationSetting">
              <h2>Navigation Type</h2>
              <div class="navoptions row no-mrpd">
                <p class="navopt s6 col left">
                  <input class="rb-teal" type="radio" name="theme_nav" id="theme_nav_vertical" data-identfier="theme_nav" data-type="vertical">
                  <label class="theme-setting-sv-label" for="theme_nav_vertical"><img class="theme-svg" src="../images/theme-svg/V49_opt3.svg" alt=""></label>
                </p>
                <p class="navopt s6 col hide-on-med-and-down right">
                  <input class="rb-teal" type="radio" name="theme_nav" id="theme_nav_horizontal" data-identfier="theme_nav" data-type="horizontal">
                  <label class="theme-setting-sv-label" for="theme_nav_horizontal"> <img class="theme-svg" src="../images/theme-svg/V48_opt3.svg" alt=""></label>
                </p>
              </div>
              <h2>Navigation Options</h2>
              <div class="navoptions row no-mrpd">
                <p class="navopt s6 col left">
                  <input class="rb-teal" type="radio" name="theme_nav_opts" id="navOpts_default" data-identfier="theme_nav_opts" data-type="default">
                  <label class="theme-setting-sv-label" for="navOpts_default"> <img class="theme-svg horz-set-svg animated" src="../images/theme-svg/HD.svg" alt=""><img class="theme-svg vert-set-svg animated" src="../images/theme-svg/V.svg" alt=""></label>
                </p>
                <p class="navopt s6 col right">
                  <input class="rb-teal" type="radio" name="theme_nav_opts" id="navOpts_iconized" data-identfier="theme_nav_opts" data-type="iconized">
                  <label class="theme-setting-sv-label" for="navOpts_iconized"><img class="theme-svg vert-set-svg animated" src="../images/theme-svg/VI.svg" alt=""><img class="theme-svg horz-set-svg animated" src="../images/theme-svg/H.svg" alt=""></label>
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================-->
        <!-- RIGHT SIDEBAR NOTIFICATION SECTION-->
        <!-- ============================-->
        <!-- NOTIFICATION-SIDEBAR-->
        <div class="row notification-sidebar fixed animated" id="sb-notification">
          <div class="col s12">
            <ul class="tabs rsb-notifications">
              <li class="tab col s4"><a href="#rsb-shortcuts"><i class="material-icons small">widgets</i></a></li>
              <li class="tab col s4"><a href="#rsb-notifications"><i class="material-icons small">notifications</i><span class="badge-count white">10</span></a></li>
              <li class="tab col s4"><a href="#rsb-tasklist"><i class="material-icons small">playlist_add_check</i><span class="badge-count teal lighten-2 white-text">14</span></a></li>
            </ul>
            <div class="col s12" id="rsb-notifications">
              <ul class="notification-list collection" id="psNotificationList">
                <li class="collection-item notification-item waves-effect waves-set">
                  <!-- REDIRECTION TO User-Profile--><a class="notify-user" href="#"> <img class="circle" src="../images/placeholder/300x300g.jpg" alt=""></a>
                  <!-- Redirection to msg/chat--><a class="notify-content" href="#"><span class="title">Amazon<i class="material-icons notify-type blue-text">add_shopping_cart</i></span>
                    <div class="notify-desc">
                       Envato account subsciption is added to your cart.</div><span class="notify-time">5 Minutes ago.</span></a>
                </li>
                <li class="collection-item notification-item waves-effect waves-set">
                  <!-- REDIRECTION TO User-Profile--><a class="notify-user" href="#"> <img class="circle" src="../images/placeholder/300x300g.jpg" alt=""></a>
                  <!-- Redirection to msg/chat--><a class="notify-content" href="#"><span class="title">Jack Jordan<i class="material-icons notify-type green-text">attach_money</i></span>
                    <div class="notify-desc">
                       Payment received from John Doe for theme.</div><span class="notify-time">30 Minutes ago.</span></a>
                </li>
                <li class="collection-item notification-item waves-effect waves-set">
                  <!-- REDIRECTION TO User-Profile--><a class="notify-user" href="#"> <img class="circle" src="../images/placeholder/300x300t.jpg" alt=""></a>
                  <!-- Redirection to msg/chat--><a class="notify-content" href="#"><span class="title">Jenny Jordan<i class="material-icons notify-type blue-text">poll</i></span>
                    <div class="notify-desc">
                       Esi has polled you.</div><span class="notify-time">35 Minutes ago.</span></a>
                </li>
                <li class="collection-item notification-item waves-effect waves-set">
                  <!-- REDIRECTION TO User-Profile--><a class="notify-user" href="#"> <img class="circle" src="../images/placeholder/300x300t.jpg" alt=""><span class="notify-status offline"></span></a>
                  <!-- Redirection to msg/chat--><a class="notify-content" href="#"><span class="title">Selena Morris<i class="material-icons notify-type purple-text">share</i></span>
                    <div class="notify-desc">
                       Jeo has shared documents with you.</div><span class="notify-time">38 Minutes ago.</span></a>
                </li>
                <li class="collection-item notification-item waves-effect waves-set">
                  <!-- REDIRECTION TO User-Profile--><a class="notify-user" href="#"> <img class="circle" src="../images/placeholder/300x300g.jpg" alt=""></a>
                  <!-- Redirection to msg/chat--><a class="notify-content" href="#"><span class="title">Jessica<i class="material-icons notify-type orange-text">notifications</i></span>
                    <div class="notify-desc">
                       Reminder to pay bill.</div><span class="notify-time">42 Minutes ago.</span></a>
                </li>
                <li class="collection-item notification-item waves-effect waves-set">
                  <!-- REDIRECTION TO User-Profile--><a class="notify-user" href="#"> <img class="circle" src="../images/placeholder/300x300g.jpg" alt=""></a>
                  <!-- Redirection to msg/chat--><a class="notify-content" href="#"><span class="title">Mira Dellon<i class="material-icons notify-type yellow-text">attachment</i></span>
                    <div class="notify-desc">
                       You have received documents from Oghie.</div><span class="notify-time">49 Minutes ago.</span></a>
                </li>
                <li class="collection-item notification-item waves-effect waves-set"><a class="notify-user" href="#"> <img class="circle" src="../images/placeholder/300x300t.jpg" alt=""></a><a class="notify-content" href="#"><span class="title">Evi Willson<i class="material-icons notify-type amber-text">message</i></span>
                    <div class="notify-desc">
                       Review and share Envato new products.</div><span class="notify-time">53 Minutes ago.</span></a></li>
                <li class="collection-item notification-item waves-effect waves-set"><a class="notify-user" href="#"> <img class="circle" src="../images/placeholder/300x300g.jpg" alt=""></a><a class="notify-content" href="#"><span class="title">Anisi Ojior<i class="material-icons notify-type red-text">battery_alert</i></span>
                    <div class="notify-desc">
                       10% battery remains.</div><span class="notify-time">54 Minutes ago.</span></a></li>
                <li class="collection-item notification-item waves-effect waves-set"><a class="notify-content full" href="#"><span class="title">Macbook<i class="material-icons notify-type cyan-text">network_wifi</i></span>
                    <div class="notify-desc">
                       Thoriseum network is connected.</div><span class="notify-time">2 Hours ago.</span></a></li>
                <li class="collection-item notification-item waves-effect waves-set"><a class="notify-user" href="#"> <img class="circle" src="../images/placeholder/300x300t.jpg" alt=""></a><a class="notify-content" href="#"><span class="title">Macbook<i class="material-icons notify-type blue-text">wb_cloudy</i></span>
                    <div class="notify-desc">
                       Weather is cloudy.</div><span class="notify-time">2 Hours 30 Minutes ago.</span></a></li>
                <li class="collection-item notification-item waves-effect waves-set"><a class="notify-user" href="#"> <img class="circle" src="../images/placeholder/300x300g.jpg" alt=""></a><a class="notify-content" href="#"><span class="title">Canon Printer<i class="material-icons notify-type red-text">print</i></span>
                    <div class="notify-desc">
                       Your Request document is not printed.</div><span class="notify-time">3 Hours ago.</span></a></li>
                <li class="collection-item notification-item waves-effect waves-set">
                  <!-- REDIRECTION TO User-Profile--><a class="notify-user" href="#"> <img class="circle" src="../images/placeholder/300x300g.jpg" alt=""></a>
                  <!-- Redirection to msg/chat--><a class="notify-content" href="#"><span class="title">Apple<i class="material-icons notify-type blue-text">system_update_alt</i></span>
                    <div class="notify-desc">
                       New updates are ready to install.</div><span class="notify-time">3 Hours  5 Minutes ago.</span></a>
                </li>
                <li class="collection-item notification-item waves-effect waves-set">
                  <!-- REDIRECTION TO User-Profile--><a class="notify-user" href="#"> <img class="circle" src="../images/placeholder/300x300g.jpg" alt=""></a>
                  <!-- Redirection to msg/chat--><a class="notify-content" href="#"><span class="title">Jack Jordan<i class="material-icons notify-type green-text">file_download</i></span>
                    <div class="notify-desc">
                       File download complete.</div><span class="notify-time">3 Hours  8 Minutes ago.</span></a>
                </li>
              </ul>
              <div class="footer"><a class="center tooltipped" href="#" data-position="top" data-tooltip="See all notifications"><i class="material-icons small">more_horiz</i></a></div>
            </div>
            <div class="col s12" id="rsb-tasklist">
              <div class="tab-notelist" id="psTabNotelist">
                <p>
                  <input type="checkbox" id="task1">
                  <label for="task1">Bring some milk</label>
                </p>
                <p>
                  <input type="checkbox" id="task2">
                  <label for="task2">Promote envato</label>
                </p>
                <p>
                  <input type="checkbox" id="task3">
                  <label for="task3">Make WP theme and submit for review</label>
                </p>
                <p>
                  <input type="checkbox" id="task4">
                  <label for="task4">Read atricle of Jeffrey. He has published a lots of tutorials for VueJS and Laravel 5.2. I want to learn unit-testing.</label>
                </p>
              </div>
              <div class="notes-footer"><a class="tooltipped left waves-effect waves-set" href="#" data-position="top" data-tooltip="Clear selected"><i class="material-icons small">delete</i></a><a class="tooltipped right waves-effect waves-set" href="#" data-position="top" data-tooltip="Add new task"><i class="material-icons small">add</i></a></div>
            </div>
            <div class="col s12" id="rsb-shortcuts">
              <ul class="tab-shortcut collection" id="psTabShortcut">
                <li class="collection-item waves-effect waves-set"><a class="shortcut-aItem" href="#"><i class="material-icons blue-text">photo_library</i><span class="shortcut-name">Gallary</span></a></li>
                <li class="collection-item waves-effect waves-set"><a class="shortcut-aItem" href="#"><i class="material-icons orange-text">mail</i><span class="shortcut-name">Mail</span></a></li>
                <li class="collection-item waves-effect waves-set"><a class="shortcut-aItem" href="#"><i class="material-icons yellow-text">file_download</i><span class="shortcut-name">Downloads</span></a></li>
                <li class="collection-item waves-effect waves-set"><a class="shortcut-aItem" href="#"><i class="material-icons green-text">event</i><span class="shortcut-name">Events</span></a></li>
                <li class="collection-item waves-effect waves-set"><a class="shortcut-aItem" href="#"><i class="material-icons purple-text">contacts</i><span class="shortcut-name">Contacts</span></a></li>
                <li class="collection-item waves-effect waves-set"><a class="shortcut-aItem" href="#"><i class="material-icons cyan-text">settings</i><span class="shortcut-name">Settings</span></a></li>
                <li class="collection-item waves-effect waves-set"><a class="shortcut-aItem" href="#"><i class="material-icons amber-text">lock</i><span class="shortcut-name">Lock Screen</span></a></li>
                <li class="collection-item waves-effect waves-set"><a class="shortcut-aItem" href="#"><i class="material-icons red-text">power_settings_new</i><span class="shortcut-name">Logout</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <main class="animated">
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
      <div class="main-header">
        <div class="sec-page">
          <div class="page-title">
            <h2>User Pages - Profile</h2>
          </div>
          <div class="page-options"><a class="dropdown-button page-opt-dropBtn btn-floating waves-effect waves-set setWave" href="#" data-activates="generalDropDown" data-beloworigin="true" data-alignment="right" data-position="bottom" data-constrainwidth="false" data-delay="50" data-gutter="25"><i class="material-icons">perm_data_setting</i></a><a class="waves-effect waves-set page-opt-dropBtn setWave btn-floating" href="#"><i class="material-icons">chat_bubble_outline</i></a></div>
        </div>
        <!-- ============================-->
        <!-- breadcrumb-->
        <!-- ============================-->
        <div class="sec-breadcrumb">
          <nav class="breadcrumbs-nav left">
            <div class="nav-wrapper">
              <div class="col s12"><a class="breadcrumb" href="index.html">Home</a><a class="breadcrumb" href="#">User Pages</a><a class="breadcrumb" href="#">Profile</a>
              </div>
            </div>
          </nav>
        </div>
      </div>
      <!-- ============================-->
      <!-- Main container-->
      <!-- ============================-->
      <div class="main-container">
        <div class="row spacer">
          <div class="col s12">
            <div class="profile-wrapper section scrollspy">
              <div class="profile-cover">
                <div class="profile-coverPic" style="background-image:url('../images/placeholder/1920x1280r.jpg');"></div>
                <div class="profile-content">
                  <div class="profile-left-container valign-wrapper"><a class="user-profilelink" href="javascript:void(0)"><img class="proifile-pic" src="../images/placeholder/300x300g.jpg" alt="proifile-pic"></a>
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
    </main>
    <!-- ============================-->
    <!-- SCRIPTS-->
    <!-- ============================-->
    <script type="text/javascript" src="../js/all.js"></script>
    <script type="text/javascript" src="../plugins/fullcalendar/lib/moment.min.js"></script>
    <script type="text/javascript" src="../plugins/fullcalendar/fullcalendar.js"></script>
    <script type="text/javascript" src="../plugins/fullcalendar/data/profile-agenda.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDb1h7KGGCmDIdyx1XT2jTHvmagtlYzyGQ"></script>
    <script>
      $(document).ready(function(){
      	$(".basic-select").material_select();
      
      });
      var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      var labelIndex = 0;
      
      function initialize() {
      var gujarat = { lat: 23.0225, lng: 72.5714 };
      var map = new google.maps.Map(document.getElementById('map'), {
      	zoom: 12,
      	center: gujarat
      });
      
      // This event listener calls addMarker() when the map is clicked.
      google.maps.event.addListener(map, 'click', function(event) {
      	addMarker(event.latLng, map);
      	});
      
      	// Add a marker at the center of the map.
      	addMarker(gujarat, map);
      }
      
      // Adds a marker to the map.
      function addMarker(location, map) {
      // Add the marker at the clicked location, and add the next-available label
      // from the array of alphabetical characters.
      var marker = new google.maps.Marker({
      	position: location,
      	label: labels[labelIndex++ % labels.length],
      	map: map
      });
      }
      
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </body>
</html>