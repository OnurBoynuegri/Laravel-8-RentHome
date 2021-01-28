@extends('layouts.home')
@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@section('title', $setting->title)
@section('description')
    {{$setting->description}}
@endsection
@section('keywords', $setting->keywords)
@section('breadcrumbs')
    <div class="breadcrumbs">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="active">My Houses</li>
        </ol>
    </div>
@endsection

@section('category')
    <div class="col-sm-2">
        @include('home.usermenu')
    </div>
@endsection

@section('content')
    <div class="col-sm-9 padding-left">
        <section id="cart_items">
            <div class="container">


                <div class="table-responsive cart_info">
                    <table class="table table-condensed">
                        <thead>
                        <tr class="cart_menu">
                            <td>ID</td>
                            <td>Category</td>
                            <td>Title</td>
                            <td>Price</td>
                            <td>Image</td>
                            <td>Image Gallery</td>
                            <td>Status</td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($dataList as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>
                                    {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title)}}
                                </td>
                                <td>
                                    <a href="{{route('house',['id'=>$rs->id,'slug'=>$rs->slug])}}"
                                       onclick="return !window.open(this.href, '','top=50 left=100 width=1100,height=700')">
                                        {{$rs->title}}
                                    </a>
                                </td>
                                <td>{{$rs->price}}</td>
                                <td>
                                    @if($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" height="30" alt="">
                                    @endif

                                </td>
                                <td>
                                    <a href="{{route('user_image_add',['house_id' => $rs->id])}}" class="btn btn-light"
                                       onclick="return !window.open(this.href, '','top=50 left=100 width=1100,height=700')">Gallery</a>
                                </td>
                                <td>{{$rs->status}}</td>
                                <td>
                                    <a class="btn btn-outline-primary"
                                       href="{{route('user_house_edit',['id' => $rs->id])}}">Edit</a>
                                </td>
                                <td>
                                    <a class="btn btn-outline-danger"
                                       href="{{route('user_house_delete',['id' => $rs->id])}}"
                                       onclick="return confirm('House will be Deleted! Are you sure?')">Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            @include('home.message')
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="payment-options">
					<span>
						<a href="{{route('user_house_add')}}" class="btn btn-primary ">Add House</a>
					</span>

                </div>
            </div>
        </section>
    </div>
@endsection

