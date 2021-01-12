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
            <li class="active">Blank</li>
        </ol>
    </div>
@endsection

@section('category')
    @include('home._category')
@endsection

@section('content')
    blank
@endsection

