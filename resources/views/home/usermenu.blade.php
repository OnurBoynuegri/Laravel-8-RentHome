<div class="left-sidebar">
    <h2>User Panel</h2>
    <div class="panel-group category-products " id="accordian"><!--category-productsr-->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"><a href="{{route('myprofile')}}">My Profile</a></h4>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"><a href="{{route('user_house')}}">My Rent Homes</a></h4>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"><a href="#">My Messages</a></h4>
            </div>
        </div>
        @php
            $userRole=Auth::user()->roles->pluck('name');
        @endphp
        @if($userRole->contains('admin'))
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="{{route('admin_home')}}">Admin Panel</a></h4>
                </div>
            </div>
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"><a href="{{route('logout')}}">Logout</a></h4>
            </div>
        </div>

    </div><!--/category-products-->


</div>
