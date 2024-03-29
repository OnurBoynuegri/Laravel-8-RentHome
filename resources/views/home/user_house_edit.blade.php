@extends('layouts.home')
@php
    $setting=\App\Http\Controllers\HomeController::getsetting();
@endphp
@section('title', $setting->title)
@section('description')
{{$setting->description}}
@endsection
@section('keywords', $setting->keywords)
@section('headerjs')
    <script src="{{asset('assets')}}/admin/js/ckeditor/ckeditor.js"></script>
@endsection
@section('breadcrumbs')
    <div class="breadcrumbs">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="active">User House Edit </li>
        </ol>
    </div>
@endsection

@section('category')
    <div class="col-sm-2">
        @include('home.usermenu')
    </div>
@endsection

@section('content')
    <div class="col-sm-10 padding-left">
        <div class="shopper-informations">
            <div class="row">
                <div class="col-sm-12">
                    <div class="shopper-info">
                        <p>Edit House</p>
                        <form role="form" action="{{route('user_house_update',['id' => $data->id])}}" method="post"
                              class="form-horizontal form-label-left" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"> Category
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="form-control select2" name="category_id">
                                        @foreach($dataList as $rs)

                                            <option value="{{$rs->id}}"
                                                    @if ($rs->id==$data->category_id) selected="selected" @endif >
                                                {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"> Title
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" name="title" value="{{$data->title}}" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Keywords</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input class="form-control" type="text" value="{{$data->keywords}}" name="keywords">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Description</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input class="form-control" type="text" value="{{$data->description}}"
                                           name="description">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">price</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input class="form-control" type="number" value="{{$data->price}}" name="price">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Address</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input class="form-control" type="text" value="{{$data->address}}" name="address">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Square Meters</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input class="form-control" type="text" value="{{$data->square_meters}}"
                                           name="square_meters">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Room Number</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input class="form-control" type="text" value="{{$data->room_number}}"
                                           name="room_number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Stuff</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="form-control select2" name="stuff">
                                        <option selected="selected">{{$data->stuff}}</option>
                                        <option>Eşyasız</option>
                                        <option>Eşyalı</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Dues</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input class="form-control" type="number" value="{{$data->dues}}" name="dues">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Detail</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <textarea name="detail" id="editor1" rows="10"
                                              cols="80">{{$data->detail}}</textarea>
                                    <script>
                                        // Replace the <textarea id="editor1"> with a CKEditor 4
                                        // instance, using default configuration.
                                        CKEDITOR.replace('editor1');
                                    </script>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Slug</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input class="form-control" type="text" value="{{$data->slug}}" name="slug">
                                </div>
                            </div>
                            @if($userData->contains('admin'))
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Status</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <select class="form-control" name="status">
                                            <option>False</option>
                                            <option>True</option>
                                        </select>
                                    </div>
                                </div>
                            @endif
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Image</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input class="form-control" type="file" name="image">
                                    @if($data->image)
                                        <img src="{{Storage::url($data->image)}}" height="60">
                                    @endif
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group row">
                                <div class="col-md-6 col-sm-6 offset-md-5">
                                    <button type="submit" class="btn btn-primary">Edit House</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

