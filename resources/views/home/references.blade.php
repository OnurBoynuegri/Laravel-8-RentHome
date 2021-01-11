@extends('layouts.home')
@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@section('title','References - '.$setting->title)
@section('description')
{{$setting->description}}
@endsection
@section('keywords', $setting->keywords)
@section('breadcrumbs')
<div class="breadcrumbs">
    <ol class="breadcrumb">
        <li><a href="{{route('home')}}">Home</a></li>
        <li class="active">References</li>
    </ol>
</div>
@endsection

    @section('content')
        <div class="col-sm-3"></div>
        <div class="col-sm-9 padding-left">
        {!! $setting->references !!}
        </div>
    @endsection


