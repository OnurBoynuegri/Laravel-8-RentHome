<div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
        <a href="{{route('admin_home')}}" class="site_title"><i class="fa fa-home"></i> <span>Rent House</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
        <div class="profile_pic">

            <img src="{{asset('assets')}}/admin/images/img.jpg" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
            @auth
                <span>Welcome,</span>
                <h2>{{Auth::user()->name}}</h2>
            @endauth
        </div>
    </div>
    <!-- /menu profile quick info -->

    <br>

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section active">
            <h3>General</h3>
            <ul class="nav side-menu" style="">
                <li>
                    <a href="{{route('admin_category')}}">
                        <i class="fa fa-edit"></i>
                        Categories
                    </a>
                </li>
                <li class="active">
                    <a>
                        <i class="fa fa-key"></i>
                        Products
                    </a>
                </li>
            </ul>
        </div>
        <div class="menu_section">
            <h3>Live On</h3>
            <ul class="nav side-menu">
                <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="e_commerce.html">E-commerce</a></li>
                        <li><a href="projects.html">Projects</a></li>
                        <li><a href="project_detail.html">Project Detail</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="profile.html">Profile</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="page_403.html">403 Error</a></li>
                        <li><a href="page_404.html">404 Error</a></li>
                        <li><a href="page_500.html">500 Error</a></li>
                        <li><a href="plain_page.html">Plain Page</a></li>
                        <li><a href="login.html">Login Page</a></li>
                        <li><a href="pricing_tables.html">Pricing Tables</a></li>
                    </ul>
                </li>
                <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        </li>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li class="sub_menu"><a href="level2.html">Level Two</a>
                                </li>
                                <li><a href="#level2_1">Level Two</a>
                                </li>
                                <li><a href="#level2_2">Level Two</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                </li>
                <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span
                            class="label label-success pull-right">Coming Soon</span></a></li>
            </ul>
        </div>

    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="" data-original-title="FullScreen">
            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Lock">
            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="" href="login.html" data-original-title="Logout">
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
    </div>
    <!-- /menu footer buttons -->
</div>