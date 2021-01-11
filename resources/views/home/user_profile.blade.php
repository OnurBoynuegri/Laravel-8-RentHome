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
            <li class="active">User Profile</li>
        </ol>
    </div>
@endsection
@section('category')
    @include('home.usermenu')
@endsection
@section('content')
    @include('profile.show')
@endsection

