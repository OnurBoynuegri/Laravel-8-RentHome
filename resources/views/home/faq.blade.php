@extends('layouts.home')
@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@section('title','Frequently Asked Question')
@section('headerjs')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#accordion").accordion();
        });
    </script>
@endsection
@section('breadcrumbs')
    <div class="breadcrumbs">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="active">FAQ</li>
        </ol>
    </div>
@endsection

@section('category')
    @include('home._category')
@endsection

@section('content')

    <div class="col-sm-9 padding-right">
        <div id="accordion">
            @foreach($datalist as $rs)
                <h3>{{$rs->question}}</h3>
                <div>
                    <p>
                        {!! $rs->answer !!}
                    </p>

                </div>
            @endforeach

        </div>
    </div>

@endsection

