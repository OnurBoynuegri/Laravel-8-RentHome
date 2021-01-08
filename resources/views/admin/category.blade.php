@extends('layouts.admin')

@section('title', 'Category List')
@section('content')
    <div class="">
        <div class="clearfix"></div>

        <div class="row" style="display: block;">

            <div class="col-md-8 col-sm-8 center-margin  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Categories</h2>
                            <div class="col-md-6 col-sm-6 offset-md-1">
                                <a href="{{route('admin_category_add')}}" class="btn btn-success">Add Category</a>
                            </div>
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
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Parent ID</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($dataList as $rs)
                                <tr>
                                    <th scope="row">{{$rs->id}}</th>
                                    <th scope="row">{{$rs->parent_id}}</th>
                                    <td>{{$rs->title}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td>
                                        <a class="btn btn-outline-primary" href="{{route('admin_category_edit',['id' => $rs->id])}}">Edit</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-danger"
                                                href="{{route('admin_category_delete',['id' => $rs->id])}}"
                                                onclick="return confirm('Categorti will Delete! Are you sure?')">Delete
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
