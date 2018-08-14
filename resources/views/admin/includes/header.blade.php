<!-- ============================-->
<!-- TOP NAV-->
<!-- ============================-->
<div class="navbar-fixed full-top-nav">
<div id="current-menu" data-menu="default">
    <nav>
        <a class="morph menu small mob-menu button-collapse top-nav waves-effect waves-light circle hide-on-large-only" href="javascript:void(0)" id="sidebar-default-collapse" data-activates="nav-default">
            <span>
                <span class="s1"></span>
                <span class="s2"></span>
                <span class="s3"></span>
            </span>
        </a>
    <div class="nav-wrapper">
        <!-- LOGO Set-->
        <a class="animated brand-logo hide-on-large-only nav-logo" href="javascript:void(0)">
            <i class="material-icons logo-icon left base-text">whatshot</i>
            <span class="left" style="margin-left:20px;">CVGEMC</span>
        </a>

        <a class="animated brand-logo hide-on-med-and-down defaultMenu-logo" href="javascript:void(0)">
            <!-- <i class="material-icons logo-icon left white-text">whatshot</i> -->
            <span class="left" style="margin-left:20px;">CVGEMC</span>
        </a>

        <!-- Left menu options at top-nav-->
        <ul class="left topnav-Menu-ls hide-on-med-and-down">
            <li>
                <a class="morph small iconizedToggle waves-effect waves-light" href="javascript:void(0)">
                    <span>
                        <span class="s1"></span>
                        <span class="s2"></span>
                        <span class="s3"></span>
                    </span>
                </a>
            </li>
            {{-- <li><a href="#">Sass</a></li> --}}
        </ul>
        <!-- Right Menu-->
        <ul class="right">
            <li class="hide-on-med-and-down">
                <a class="waves-effect waves-set app-search-btn" href="#"><i class="material-icons">search</i></a>
            </li>

            <!-- MESSAGE SECTION-->
            <li class="hide-on-med-and-down">
                <a class="dropdown-button waves-effect waves-set" href="#" data-beloworigin="true" data-activates="top-nav-msgsweb">
                    <i class="material-icons">email</i>
                    <span class="badge-count">5</span>
                </a>
            </li>

            <!-- ADMIN SETTINGS SECTION-->
            <li>
                <a class="dropdown-button waves-effect waves-set" href="#" data-beloworigin="true" data-activates="top-nav-userProfile">
                    <img class="circle admin-profile-img-small" src="{{ Auth::user()->pic?Storage::url(Auth::user()->pic):url('/images/square/male_6.jpg') }}" alt="">
                </a>
            </li>
            <li class="hide-on-med-and-down">
                <a class="morph notify small notification-toggle-open waves-effect waves-light" href="javascript:void(0)">
                    <span>
                        <span class="s1"></span>
                        <span class="s2"></span>
                        <span class="s3"></span>
                    </span>
                </a>
            </li>
            <li class="hide-on-large-only">
                <a class="waves-effect waves-set toggle-topnav-hidden-menu" href="javascript:void(0);"><i class="material-icons">more_vert</i></a>
            </li>
        </ul>
        <!-- Mobile Screen Nav Options-->
        <ul class="right hide-on-large-only topnav-hidden-menu hide">
            <li>
                <a class="waves-effect waves-set app-search-btn" href="#">
                    <i class="material-icons">search</i>
                </a>
            </li>
            <li class="right">
                <a class="waves-effect waves-set toggle-topnav-hidden-menu" href="#">
                    <i class="material-icons">more_vert</i>
                </a>
            </li>
            <li class="right">
                <a class="morph notify small notification-toggle-open waves-effect waves-light" href="javascript:void(0)">
                    <span>
                        <span class="s1"></span>
                        <span class="s2"></span>
                        <span class="s3"></span>
                    </span>
                </a>
            </li>
            <li class="right">
                <a class="dropdown-button waves-effect waves-set" href="#" data-beloworigin="true" data-activates="top-nav-msgs">
                    <i class="material-icons">email</i>
                    <span class="badge-count">5</span>
                </a>
            </li>
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
                            <!-- REDIRECTION TO User-Profile-->
                            <a class="chat-user" href="#">
                                <img class="circle" src="{{ asset('images/placeholder/300x300g.jpg') }}" alt="">
                                <span class="chat-status with-badge online">10</span>
                            </a>
                            <!-- Redirection to msg/chat-->
                            <a class="chat-content" href="#">
                                <span class="title">Jenny Jordan</span>
                                <div class="notify-desc">Hey, How are you doing?</div>
                                <span class="chat-time">30 Minutes ago.</span>
                            </a>
                        </li>
                        <li class="collection-item msg-items">
                            <!-- REDIRECTION TO User-Profile-->
                            <a class="chat-user" href="#">
                                <img class="circle" src="{{ asset('images/placeholder/300x300g.jpg') }}" alt="">
                                <span class="chat-status with-badge offline">5</span>
                            </a>
                            <!-- Redirection to msg/chat-->
                            <a class="chat-content" href="#">
                                <span class="title">Jack Jordan</span>
                                <div class="notify-desc">Wish you Happy birthday!</div>
                                <span class="chat-time">20 Minutes ago.</span>
                            </a>
                        </li>
                        <li class="collection-item msg-items">
                            <a class="chat-user" href="#">
                                <img class="circle" src="{{ asset('images/placeholder/300x300g.jpg') }}" alt="">
                                <span class="chat-status with-badge away">10</span>
                            </a>
                            <a class="chat-content" href="#">
                                <span class="title">Selena Morris</span>
                                <div class="notify-desc">Envato is really awesome place to be.</div>
                                <span class="chat-time">15 Minutes ago.</span>
                            </a>
                        </li>
                        <li class="collection-item msg-items">
                            <a class="chat-user" href="#">
                                <img class="circle" src="{{ asset('images/placeholder/300x300g.jpg') }}" alt="">
                                <span class="chat-status with-badge busy">10</span>
                            </a>
                            <a class="chat-content" href="#">
                                <span class="title">Mira Dellon</span>
                                <div class="notify-desc">Let meet up at my place in this weekends.</div>
                                <span class="chat-time">10 Minutes ago.</span>
                            </a>
                        </li>
                        <li class="collection-item msg-items">
                            <a class="chat-user" href="#">
                                <img class="circle" src="{{ asset('images/placeholder/300x300g.jpg') }}" alt="">
                                <span class="chat-status with-badge online">10</span>
                            </a>
                            <a class="chat-content" href="#">
                                <span class="title">Evi Willson</span>
                                <div class="notify-desc">Are you ready for party on this weekend?</div>
                                <span class="chat-time">5 Minutes ago.</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="collection-item msg-footer pos-relative">
                    <a class="center tooltipped" href="#" data-position="top" data-tooltip="See all messages" style="padding:7px 16px;">
                        <i class="material-icons small clear-style">more_horiz</i>
                    </a>
                </li>
            </ul>
            <ul class="collection dropdown-content" id="top-nav-msgs">
                <li class="collection-item msg-header">
                    <ul>
                        <li class="left">
                            <span>Messages</span>
                            <a class="right" href="#">
                                <i class="material-icons small">create</i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="collection-item msg-content">
                    <ul class="collection" id="psTopNavMmsgs">
                        <li class="collection-item msg-items">
                            <!-- REDIRECTION TO User-Profile-->
                            <a class="chat-user" href="#">
                                <img class="circle" src="{{ asset('images/placeholder/300x300g.jpg') }}" alt="">
                                <span class="chat-status with-badge online">10</span>
                            </a>
                            <!-- Redirection to msg/chat-->
                            <a class="chat-content" href="#"><span class="title">Jenny Jordan</span>
                                <div class="notify-desc">Hey, How are you doing?</div>
                                <span class="chat-time">30 Minutes ago.</span>
                            </a>
                        </li>
                        <li class="collection-item msg-items">
                            <!-- REDIRECTION TO User-Profile-->
                            <a class="chat-user" href="#">
                                <img class="circle" src="{{ asset('images/placeholder/300x300g.jpg') }}" alt="">
                                <span class="chat-status with-badge offline">5</span>
                            </a>
                            <!-- Redirection to msg/chat-->
                            <a class="chat-content" href="#">
                                <span class="title">Jack Jordan</span>
                                <div class="notify-desc">Wish you Happy birthday!</div>
                                <span class="chat-time">20 Minutes ago.</span>
                            </a>
                        </li>
                        <li class="collection-item msg-items">
                            <a class="chat-user" href="#">
                                <img class="circle" src="{{ asset('images/placeholder/300x300g.jpg') }}" alt="">
                                <span class="chat-status with-badge away">10</span>
                            </a>
                            <a class="chat-content" href="#">
                                <span class="title">Selena Morris</span>
                                <div class="notify-desc">Envato is really awesome place to be.</div>
                                <span class="chat-time">15 Minutes ago.</span>
                            </a>
                        </li>
                        <li class="collection-item msg-items">
                            <a class="chat-user" href="#">
                                <img class="circle" src="{{ asset('images/placeholder/300x300g.jpg') }}" alt="">
                                <span class="chat-status with-badge busy">10</span>
                            </a>
                            <a class="chat-content" href="#"><span class="title">Mira Dellon</span>
                                <div class="notify-desc">Let meet up at my place in this weekends.</div>
                                <span class="chat-time">10 Minutes ago.</span>
                            </a>
                        </li>
                        <li class="collection-item msg-items">
                            <a class="chat-user" href="#">
                                <img class="circle" src="{{ asset('images/placeholder/300x300g.jpg') }}" alt="">
                                <span class="chat-status with-badge online">10</span>
                            </a>
                            <a class="chat-content" href="#">
                                <span class="title">Evi Willson</span>
                                <div class="notify-desc">Are you ready for party on this weekend?</div>
                                <span class="chat-time">5 Minutes ago.</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="collection-item msg-footer pos-relative">
                    <a class="center tooltipped" href="#" data-position="top" data-tooltip="See all messages" style="padding:7px 16px;">
                        <i class="material-icons small clear-style">more_horiz</i>
                    </a>
                </li>
            </ul>

            <ul class="collection dropdown-content" id="top-nav-userProfile">
                <li class="collection-item">
                    <div class="admin-profile-content">
                        <img class="circle user-profile-img"
                            src="{{ Auth::user()->pic?Storage::url(Auth::user()->pic):url('/images/square/male_6.jpg') }}" alt="">
                        <p class="user-name primary-text">{{ ucwords(Auth::user()->name) }}</p>
                        <p class="user-designation secondary-text">{{ ucwords(Auth::user()->designation) }}</p>
                        <div class="divider"></div>
                        <ul class="profile-ul">
                            <li class="profile-li">
                                <a class="btn waves-light collection-item" href="{{ url('/admin/profile') }}">
                                    <i class="material-icons left">settings</i>
                                    <span class="text-items">Profile</span>
                                </a>
                            </li>
                            <li class="profile-li">
                                <a class="btn waves-light collection-item" href="#">
                                    <i class="material-icons left">inbox</i>
                                    <span class="badge right secondary-bg lighten-2 new">5</span>
                                    <span class="text-items">Inbox</span>
                                </a>
                            </li>
                            <li class="profile-li">
                                <a class="btn waves-light collection-item" href="{{ url('/admin/logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <i class="material-icons left">power_settings_new</i><span class="text-items">Sign Out</span>
                                </a>
                                <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Searchbar-->
        <form class="inactive animated" id="app-search">
            <div class="input-field">
                <input type="search" id="search">
                <label class="label-icon" for="search">
                    <i class="material-icons">search</i>
                </label>
                <i class="material-icons app-search-Cls">close</i>
            </div>
        </form>
    </div>
    </nav>
</div>
</div>
