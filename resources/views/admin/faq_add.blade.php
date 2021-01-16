@extends('layouts.admin')

@section('title', 'Add Faq')
@section('script')
    <script src="{{asset('assets')}}/admin/js/ckeditor/ckeditor.js"></script>
@endsection
@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-6 col-sm-6 center-margin">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Add Faq</h2>

                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <br>

                        <form role="form" action="{{route('admin_faq_store')}}" method="post"
                              class="form-horizontal form-label-left" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"> Position
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="number" name="position" value="0" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Question </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input class="form-control" type="text" name="question">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Answer</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <textarea name="answer" id="answer" rows="10" cols="80"></textarea>
                                    <script>
                                        // Replace the <textarea id="editor1"> with a CKEditor 4
                                        // instance, using default configuration.
                                        CKEDITOR.replace('answer');
                                    </script>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 label-align">Status</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="form-control" name="status">
                                        <option>False</option>
                                        <option>True</option>
                                    </select>
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group row">
                                <div class="col-md-6 col-sm-6 offset-md-5">
                                    <button type="submit" class="btn btn-success">Add</button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
