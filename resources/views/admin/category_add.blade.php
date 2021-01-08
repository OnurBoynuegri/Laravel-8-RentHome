@extends('layouts.admin')

@section('title', 'Add Category')
@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-6 col-sm-6 center-margin">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Add Category</h2>

                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <br>

                        <form role="form" action="{{route('admin_category_create')}}" method="post"
                              class="form-horizontal form-label-left">
                            @csrf
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"> Parent
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="form-control select2" name="parent_id">
                                        <option value="0" >Main Category</option>
                                        @foreach($dataList as $rs)

                                        <option value="{{$rs->id}}">{{$rs->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"> Title
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" name="title" class="form-control">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Keyword </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input class="form-control" type="text" name="keywords">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Description</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input class="form-control" type="text" name="description">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Slug</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input class="form-control" type="text" name="slug">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 label-align">Status</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="form-control select2" name="status">
                                        <option>False</option>
                                        <option>True</option>
                                    </select>
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-5">
                                    <button type="submit" class="btn btn-success">Add Category</button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
