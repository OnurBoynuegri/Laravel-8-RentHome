<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i>{{$setting->phone}}</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> {{$setting->email}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            @if($setting->facebook!= null)
                                <li><a href="{{$setting->facabook}}" target="_blank"><i class="fa fa-facebook"></i></a>
                                </li>@endif
                            @if($setting->twitter!= null)
                                <li><a href="{{$setting->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a>
                                </li>@endif
                            @if($setting->linkedin!= null)
                                <li><a href="{{$setting->linkedin}}" target="_blank"><i class="fa fa-linkedin"></i></a>
                                </li>@endif
                            @if($setting->youtube!= null)
                                <li><a href="{{$setting->youtube}}" target="_blank"><i class="fa fa-youtube"></i></a>
                                </li>@endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->
    <!--header-middle-->
    <div class="header-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="{{route('home')}}"><img src="{{asset('assets')}}/images/home/logo.png" alt=""></a>
                    </div>
                    <div class="btn-group pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                USA
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Canada</a></li>
                                <li><a href="#">UK</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                DOLLAR
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Canadian Dollar</a></li>
                                <li><a href="#">Pound</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        @auth
                            <ul class="nav navbar-nav">
                                <li><a href="{{route('myprofile')}}"><i class="fa fa-user"></i> {{Auth::user()->name}}
                                    </a></li>
                                <li><a href="{{route('logout')}}"><i class="fa fa-unlock"></i> Logout</a></li>
                            </ul>
                        @endauth
                        @guest
                            <ul class="nav navbar-nav">
                                <li><a href="{{route('admin_login')}}"><i class="fa fa-lock"></i> login</a></li>
                                <li><a href="/register"><i class="fa fa-sign-in"></i> signin</a></li>
                            </ul>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{route('home')}}" class="active">Home</a></li>
                            <li><a href="{{route('aboutus')}}">About us</a></li>
                            <li><a href="{{route('reference')}}">References</a></li>
                            <li><a href="{{route('faq')}}">FAQ</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <form action="{{route('gethouse')}}" method="post">
                            @csrf
                            @livewire('search')
                        </form>
                        @livewireScripts
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header>
