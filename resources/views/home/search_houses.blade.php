@extends('layouts.home')
@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@section('title', $search." Listesi")

@section('breadcrumbs')
    <div class="breadcrumbs">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="active">{{$search}} Listesi</li>
        </ol>
    </div>
@endsection
@section('category')
    @include('home._category')
@endsection

@section('content')
    <div class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
            @foreach($datalist as $rs)
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{Storage::url($rs->image)}}" alt="" style="width: 100%;height: 200px;">
                                <h2>{{$rs->price}}</h2>
                                <p>{{$rs->title}}</p>
                                <a href="{{route('house',['id'=>$rs->id,'slug'=>$rs->slug])}}" class="btn btn-default add-to-cart">Detail</a>
                            </div>
                        </div>
                    </div>
                    </div>
                    @endforeach

                </div><!--features_items-->
        </div>
@endsection

