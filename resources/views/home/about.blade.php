@extends('layouts.home')
@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@section('title','About Us - '.$setting->title)
@section('description')
{{$setting->description}}
@endsection
@section('keywords', $setting->keywords)
@section('breadcrumbs')
<div class="breadcrumbs">
    <ol class="breadcrumb">
        <li><a href="{{route('home')}}">Home</a></li>
        <li class="active">About Us</li>
    </ol>
</div>
@endsection


@section('content')
{!! $setting->aboutus !!}
@endsection

