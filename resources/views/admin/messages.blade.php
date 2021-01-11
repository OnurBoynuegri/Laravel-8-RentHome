@extends('layouts.admin')

@section('title', 'Contact Messages List')
@section('content')
    <div class="">
        <div class="clearfix"></div>

        <div class="row" style="display: block;">

            <div class="col-md-12 col-sm-12 center-margin  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Messages</h2>
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
                        @include('home.message')
                        <table class="table table-bordered ">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Admin Note</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($dataList as $rs)
                                <tr>
                                    <th scope="row">{{$rs->id}}</th>
                                    <td>{{$rs->name}}</td>
                                    <td>{{$rs->email}}</td>
                                    <td>{{$rs->phone}}</td>
                                    <td>{{$rs->subject}}</td>
                                    <td><p style="width: 150px;overflow: hidden;text-overflow:ellipsis;white-space: nowrap;">{{$rs->message}}</p></td>
                                    <td>{{$rs->note}}</td>
                                    <td>{{$rs->status}}</td>

                                    <td>
                                        <a class="btn btn-outline-primary"
                                           href="{{route('admin_message_show',['id' => $rs->id])}}"
                                           onclick="return !window.open(this.href, '','top=20 left=100 width=1000,height=700')">Show</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-danger"
                                           href="{{route('admin_message_delete',['id' => $rs->id])}}"
                                           onclick="return confirm('House will be Deleted! Are you sure?')">Delete
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
