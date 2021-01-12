@extends('layouts.home')
@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@section('title', $setting->title)
@section('description')
    {{$setting->description}}
@endsection

@section('keywords', $setting->keywords)



@section('slider')
    @include('home._slider')
@endsection

@section('category')
    @include('home._category')
@endsection

@section('content')

    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Houses</h2>
        @foreach($last as $rs)
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{Storage::url($rs->image)}}" alt="" style="width: 100%;height: 200px;">
                            <h2>{{$rs->price}}</h2>
                            <p>{{$rs->title}}</p>
                            <a href="{{route('house',['id'=>$rs->id,'slug'=>$rs->slug])}}"
                               class="btn btn-default add-to-cart">Detail</a>
                        </div>

                    </div>

                </div>
            </div>
        @endforeach
    </div><!--features_items-->

    <div class="recommended_items"><!--recommended_items-->
        <h2 class="title text-center">Recommended Hotels</h2>

        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">


                @foreach($random->chunk(3) as $three)
                    <div class="item @if ($loop->first) active @endif">
                        @foreach($three as $rs)
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
                    </div>
                @endforeach
            </div>
            <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div><!--/recommended_items-->

@endsection

