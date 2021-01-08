@extends('layouts.admin')

@section('title', 'Edit House')
@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-6 col-sm-6 center-margin">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Edit House</h2>

                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <br>

                        <form role="form" action="{{route('admin_house_update',['id' => $data->id])}}" method="post"
                              class="form-horizontal form-label-left">
                            @csrf
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"> Category
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="form-control select2" name="category_id">
                                        @foreach($dataList as $rs)

                                            <option value="{{$rs->id}}" @if ($rs->id==$data->category_id) selected="selected" @endif >{{$rs->title}}
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
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Keywords </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input class="form-control" type="text"value="{{$data->keywords}}" name="keywords">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Description</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input class="form-control" type="text"value="{{$data->description}}" name="description">
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
                                    <input class="form-control" type="text" value="{{$data->address}}"name="address">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Square Meters</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input class="form-control" type="text" value="{{$data->square_meters}}"name="square_meters">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Room Number</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input class="form-control" type="text"value="{{$data->room_number}}" name="room_number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 label-align">Stuff</label>
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
                                    <input class="form-control" type="text"value="{{$data->detail}}" name="detail">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Slug</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input class="form-control" type="text"value="{{$data->slug}}" name="slug">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 label-align">Status</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="form-control select2" name="status">
                                        <option selected="selected">{{$data->status}}</option>
                                        <option>False</option>
                                        <option>True</option>
                                    </select>
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group row">
                                <div class="col-md-6 col-sm-6 offset-md-5">
                                    <button type="submit" class="btn btn-success">Edit House</button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
