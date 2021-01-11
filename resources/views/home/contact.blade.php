@extends('layouts.home')
@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@section('title','Contact - '.$setting->title)
@section('description')
    {{$setting->description}}
@endsection
@section('keywords', $setting->keywords)
@section('breadcrumbs')
    <div class="breadcrumbs">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="active">Contact</li>
        </ol>
    </div>
@endsection


@section('content')
    <div class="bg">
        <div class="row">
            <div class="col-sm-6">
                <div class="contact-form">
                    <h2 class="title text-center">Get In Touch</h2>
                    @include('home.message')
                    <div class="status alert alert-success" style="display: none"></div>
                    <form id="main-contact-form" class="contact-form row" name="contact-form" method="post"
                          action="{{route('sendmessage')}}">
                        @csrf
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" required="required"
                                   placeholder="Name & Surname">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" name="email" class="form-control" required="required"
                                   placeholder="Email">
                        </div>

                        <div class="form-group col-md-12">
                            <input type="text" name="subject" class="form-control" required="required"
                                   placeholder="Subject">
                        </div>
                        <div class="form-group col-md-12">
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"
                                      placeholder="Your Message Here"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <input type="submit" name="submit" class="btn btn-primary pull-right" value="Send Message">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="contact-info">
                    <h2 class="title text-center">Contact Info</h2>
                    <address>
                        <p>{!! $setting->contact !!}</p>

                    </address>
                    <div class="social-networks">
                        <h2 class="title text-center">Social Networking</h2>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

