@extends('layouts.admin')

@section('title', 'User List')
@section('content')
    <div class="">
        <div class="clearfix"></div>

        <div class="row" style="display: block;">

            <div class="col-md-12 col-sm-12 center-margin  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Users</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <table class="table table-bordered ">
                            @include('home.message')
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Roles</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)
                                <tr>
                                    <th scope="row">{{$rs->id}}</th>
                                    <th scope="row">
                                        @if($rs->profile_photo_path)
                                            <img src="{{Storage::url($rs->profile_photo_path)}}" height="70" alt="">
                                        @endif
                                    </th>
                                    <td>{{$rs->name}}</td>
                                    <td>{{$rs->email}}</td>
                                    <td>{{$rs->phone}}</td>
                                    <td>@foreach($rs->roles as $row)
                                            {{$row->name}}
                                        @endforeach
                                        <a href="{{route('admin_user_roles',['id'=>$rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=800,height=600')">
                                            <i class="fa fa-plus-square fa-lg"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-primary"
                                           href="{{route('admin_user_edit',['id' => $rs->id])}}">Edit</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-danger"
                                           href="{{route('admin_user_delete',['id' => $rs->id])}}"
                                           onclick="return confirm('Deleted! Are you sure?')">Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
