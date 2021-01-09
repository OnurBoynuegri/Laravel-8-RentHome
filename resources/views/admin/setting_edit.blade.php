@extends('layouts.admin')

@section('title', 'Edit Setting')
@section('script')
    <script src="{{asset('assets')}}/admin/js/ckeditor/ckeditor.js"></script>
@endsection
@section('content')
    <div class="">
        <div class="row">


                <div class="col-md-12 col-sm-12 ">
                    <form role="form" action="{{route('admin_setting_update')}}" method="post"
                          class="form-horizontal form-label-left" enctype="multipart/form-data">
                        @csrf
                <div class="x_panel">
                    <div class="x_title">
                        <h2><i class="fa fa-bars"></i> Tabs <small>Float left</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content" >

                        <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab"
                                   aria-controls="general" aria-selected="true">General</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="smtp-tab" data-toggle="tab" href="#smtp" role="tab"
                                   aria-controls="profile" aria-selected="false">Smtp Settings</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="social-tab" data-toggle="tab" href="#social" role="tab"
                                   aria-controls="social" aria-selected="false">Social Media</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="aboutuss-tab" data-toggle="tab" href="#aboutuss" role="tab"
                                   aria-controls="aboutuss" aria-selected="false">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contactt-tab" data-toggle="tab" href="#contactt" role="tab"
                                   aria-controls="contactt" aria-selected="false">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="referencess-tab" data-toggle="tab" href="#referencess"
                                   role="tab" aria-controls="referencess" aria-selected="false">References</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" id="general" role="tabpanel"
                                     aria-labelledby="home-tab">
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" type="hidden">
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
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
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Company</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input class="form-control" type="text" value="{{$data->company}}" name="company">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Address</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input class="form-control" type="text" value="{{$data->address}}" name="address">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Phone</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input class="form-control" type="number" value="{{$data->phone}}"
                                                   name="phone">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Fax</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input class="form-control" type="number" value="{{$data->fax}}"
                                                   name="fax">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input class="form-control" type="text" value="{{$data->email}}"
                                                   name="email">
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
                                </div>
                                <div class="tab-pane fade" id="smtp" role="tabpanel" aria-labelledby="smtp-tab">
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Smtp Server</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input class="form-control" type="text" value="{{$data->smtpserver}}"
                                                   name="smtpserver">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Smtp Email</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input class="form-control" type="text" value="{{$data->smtpemail}}"
                                                   name="smtpemail">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Smtp Password</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input class="form-control" type="password" value="{{$data->smtppassword}}"
                                                   name="smtppassword">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Smtp Port</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input class="form-control" type="number" value="{{$data->smtpport}}" name="smtpport">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Facebook</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input class="form-control" type="text" value="{{$data->facebook}}"
                                                   name="facebook">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Instagram</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input class="form-control" type="text" value="{{$data->instagram}}"
                                                   name="instagram">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Twitter</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input class="form-control" type="text" value="{{$data->twitter}}"
                                                   name="twitter">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Youtube</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input class="form-control" type="text" value="{{$data->youtube}}"
                                                   name="youtube">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="aboutuss" role="tabpanel" aria-labelledby="aboutus-tab">
                                    <div class="form-group row">
                                        <div class="col-md-12 col-sm-12 ">
                                    <textarea name="aboutus" id="aboutus" rows="10"
                                              cols="80">{{$data->aboutus}}</textarea>
                                            <script>
                                                // Replace the <textarea id="editor1"> with a CKEditor 4
                                                // instance, using default configuration.
                                                CKEDITOR.replace('aboutus');
                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contactt" role="tabpanel" aria-labelledby="contactt-tab">
                                    <div class="form-group row">
                                        <div class="col-md-12 col-sm-12 ">
                                    <textarea name="contact" id="contact" rows="10"
                                              cols="80">{{$data->contact}}</textarea>
                                            <script>
                                                // Replace the <textarea id="editor1"> with a CKEditor 4
                                                // instance, using default configuration.
                                                CKEDITOR.replace('contact');
                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="referencess" role="tabpanel"
                                     aria-labelledby="referencess-tab">

                                    <div class="form-group row">
                                        <div class="col-md-12 col-sm-12 ">
                                    <textarea name="references" id="references" rows="10"
                                              cols="80">{{$data->references}}</textarea>
                                            <script>
                                                // Replace the <textarea id="editor1"> with a CKEditor 4
                                                // instance, using default configuration.
                                                CKEDITOR.replace('references');
                                            </script>
                                        </div>
                                    </div>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="form-group row">
                                    <div class="col-md-6 col-sm-6 offset-md-5">
                                        <button type="submit" class="btn btn-success">Update Setting</button>
                                    </div>
                                </div>



                        </div>
                    </div>
                </div>
                    </form>
            </div>

        </div>
    </div>
@endsection
