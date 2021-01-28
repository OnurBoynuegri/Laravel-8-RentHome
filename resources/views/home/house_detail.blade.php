@extends('layouts.home')
@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@section('title', $data->title)
@section('description')
    {{$data->description}}
@endsection
@section('keywords', $setting->keywords)
@section('breadcrumbs')
    <div class="breadcrumbs">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
            <li ><a href="#">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category,$data->category->title)}}</a></li>
            <li class="active">{{$data->title}}</li>
        </ol>
    </div>
@endsection

@section('category')
    @include('home._category')
@endsection

@section('content')
    <div class="col-sm-9 padding-right">
        <div class="product-details col-sm-10">
                <section id="slider"><!--slider-->
                                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach($datalist as $rs)
                                            <div class="item @if ($loop->first) active @endif">

                                                <div class="col-sm-10">
                                                    <img src="{{Storage::url($rs->image)}}" class="girl img-responsive"
                                                         alt="" style="width: 100%; height: 300px;">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                    <a href="#slider-carousel" class="left control-carousel hidden-xs"
                                       data-slide="prev">
                                        <i class="fa fa-angle-left"></i>
                                    </a>
                                    <a href="#slider-carousel" class="right control-carousel hidden-xs"
                                       data-slide="next">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>

                </section>
        </div><!--/product-details-->

        <div class="category-tab shop-details-tab col-sm-10"><!--category-tab-->
            <div class="col-sm-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#features" data-toggle="tab">Features</a></li>
                    <li><a href="#details" data-toggle="tab">Details</a></li>
                    <li><a href="#userDetails" data-toggle="tab">İlan Sahibi</a></li>
                </ul>
            </div>
            <div class="tab-content">

                <div class="tab-pane fade active in" id="features">
                    <div class="col-sm-12">
                        <div class="product-information" style="border: 0px; "><!--/product-information-->
                            <h2>{{$data->title}}</h2>
                            <span>  <span>{{$data->price}} TL</span></span>
                            <p><b>Address:</b> {{$data->address}}</p>
                            <p><b>Square Meters:</b> {{$data->square_meters}}</p>
                            <p><b>Room:</b> {{$data->room_number}}</p>
                            <p><b>Heating:</b> {{$data->heating}}</p>
                            <p><b>Stuff:</b>{{$data->stuff}}</p>
                            <p><b>Dues:</b> {{$data->dues}}</p>

                        </div><!--/product-information-->
                    </div>
                </div>

                <div class="tab-pane fade" id="details">
                    <p>{!!  $data->detail!!}</p>
                </div>
                <div class="tab-pane fade" id="userDetails">
                    <div class="col-sm-12">
                        <div class="product-information" style="border: 0px; "><!--/product-information-->
                            <p><b>Ad Soyad:</b> {{$data->user->name}}</p>
                            <p><b>Email:</b> {{$data->user->email}}</p>
                            <p><b>Phone:</b> {{$data->user->phone}}</p>

                        </div><!--/product-information-->
                    </div>

                </div>

            </div>
        </div><!--/category-tab-->


    </div>
@endsection

