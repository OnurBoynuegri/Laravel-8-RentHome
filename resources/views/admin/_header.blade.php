<div class="nav_menu">
    <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
    </div>
    <nav class="nav navbar-nav">
        <ul class=" navbar-right">
            <li class="nav-item dropdown open" style="padding-left: 15px;">
                @auth
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown"
                   data-toggle="dropdown" aria-expanded="false">
                    @if(Auth::user()->profile_photo_path)
                        <img src="{{Storage::url(Auth::user()->profile_photo_path)}}">
                    @endif
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{route('admin_user_show',['id'=>\Illuminate\Support\Facades\Auth::id()])}}"
                       onclick="return !window.open(this.href, '','top=50 left=100 width=800,height=600')"> Profile</a>
                    <a class="dropdown-item" href="{{route('admin_setting')}}">
                        <span>Settings</span>
                    </a>
                    <a class="dropdown-item" href="javascript:;">Help</a>
                    <a class="dropdown-item" href="{{route('logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                </div>
                @endauth
            </li>
        </ul>
    </nav>
</div>
