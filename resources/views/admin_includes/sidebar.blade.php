<body>
    <div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="{{ asset('public/img/profile_small.jpg') }}" />
                             </span>
                            <a href="{{ url('/changePassword') }}">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Admin</strong>
                             </span> <span class="text-muted text-xs block">Change Password <b class="key"></b></span> </span> </a>
                    </div>
                    <div class="logo-element">
                        ICO
                    </div>
                </li>
                <li class="active">
                    <a href="{{ url('/dashboard') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span> </a>
                </li>
                <li>
                    <a href="{{ url('/subscribers') }}"><i class="fa fa-users"></i> <span class="nav-label">Subscribers</span></a>
                </li>
                <li>
                    <a href="{{ url('/header') }}"><i class="fa fa-compass"></i> <span class="nav-label">Header</span></a>
                </li>
                <li>
                    <a href="{{ url('/background') }}"><i class="fa fa-sliders"></i> <span class="nav-label">Background</span></a>
                </li>
                <li>
                    <a href="{{ url('/features') }}"><i class="fa fa-space-shuttle"></i> <span class="nav-label">Features</span></a>
                </li>
                <li>
                    <a href="{{ url('/about') }}"><i class="fa fa-meh-o"></i> <span class="nav-label">About</span></a>
                </li>
                <li>
                    <a href="{{ url('/clients') }}"><i class="fa fa-globe"></i> <span class="nav-label">Clients</span></a>
                </li>
                <li>
                    <a href="{{ url('/solutions') }}"><i class="fa fa-tripadvisor"></i> <span class="nav-label">Solutions</span></a>
                </li>
                <li>
                    <a href="{{ url('/goals') }}"><i class="fa fa-stop-circle"></i> <span class="nav-label">Goals</span></a>
                </li>
                <li>
                    <a href="{{ url('/roadmap') }}"><i class="fa fa-map-signs"></i> <span class="nav-label">Roadmap</span></a>
                </li>
                <li>
                    <a href="{{ url('/team') }}"><i class="fa fa-users"></i> <span class="nav-label">Team</span></a>
                </li>
                <li>
                    <a href="{{ url('/tokensale') }}"><i class="fa fa-btc"></i> <span class="nav-label">Tokensale</span></a>
                </li>
                <li>
                    <a href="{{ url('/tokenstructure') }}"><i class="fa fa-arrows"></i> <span class="nav-label">Token Structure</span></a>
                </li>
                <li>
                    <a href="{{ url('/footer') }}"><i class="fa fa-chevron-down"></i> <span class="nav-label">Footer</span></a>
                </li>
                <li>
                    <a href="{{ url('/customize') }}"><i class="fa fa-fort-awesome"></i> <span class="nav-label">Customizations</span></a>
                </li>

            </ul>

        </div>
    </nav>
