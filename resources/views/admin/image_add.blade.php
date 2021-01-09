<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico"/>

    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="{{asset('assets')}}/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('assets')}}/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('assets')}}/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('assets')}}/admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{asset('assets')}}/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('assets')}}/admin/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('assets')}}/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('assets')}}/admin/build/css/custom.min.css" rel="stylesheet">
    @yield('css')
    @yield('script')
</head>
<body class="nav-md">
            <div class="">
                <div class="row">
                    <div class="col-md-12 col-sm-12 center-margin">

                        <div class="x_panel">
                            <div class="x_title">
                                <h2>{{$data->title}}</h2>

                                <div class="clearfix"></div>
                            </div>

                            <div class="x_content">
                                <br>
                                <form role="form" action="{{route('admin_image_store',['house_id' => $data->id])}}"
                                      method="post"
                                      class="form-horizontal form-label-left" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"> Title
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" name="title" class="form-control">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Image</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input class="form-control" type="file" name="image">
                                        </div>
                                    </div>

                                    <div class="ln_solid"></div>
                                    <div class="form-group row">
                                        <div class="col-md-6 col-sm-6 offset-md-5">
                                            <button type="submit" class="btn btn-success">Add Image</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-md-12 center-margin" >
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Media Gallery <small> gallery design </small></h2>
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
                            <div class="x_content">

                                <div class="row">
                                    @foreach($images as $rs)
                                        <div class="col-md-55">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img style="width: 100%; height: 207px; display: block;"
                                                         src="{{Storage::url($rs->image)}}" alt="">
                                                    <div class="mask">
                                                        <p>{{$rs->id}}</p>
                                                        <div class="tools tools-bottom">
                                                            <a class="btn btn-outline-danger"
                                                               href="{{route('admin_image_delete',['id' => $rs->id,'house_id' => $data->id])}}"
                                                               onclick="return confirm('House will be Deleted! Are you sure?')">
                                                                <i class="fa fa-times"></i> </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <p>{{$rs->title}}</p>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <!-- jQuery -->
    <script src="{{asset('assets')}}/admin/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{asset('assets')}}/admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="{{asset('assets')}}/admin/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="{{asset('assets')}}/admin/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="{{asset('assets')}}/admin/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="{{asset('assets')}}/admin/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('assets')}}/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="{{asset('assets')}}/admin/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="{{asset('assets')}}/admin/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="{{asset('assets')}}/admin/vendors/Flot/jquery.flot.js"></script>
    <script src="{{asset('assets')}}/admin/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="{{asset('assets')}}/admin/vendors/Flot/jquery.flot.time.js"></script>
    <script src="{{asset('assets')}}/admin/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="{{asset('assets')}}/admin/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="{{asset('assets')}}/admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="{{asset('assets')}}/admin/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="{{asset('assets')}}/admin/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="{{asset('assets')}}/admin/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="{{asset('assets')}}/admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="{{asset('assets')}}/admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('assets')}}/admin/vendors/moment/min/moment.min.js"></script>
    <script src="{{asset('assets')}}/admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('assets')}}/admin/build/js/custom.min.js"></script>

</body>
</html>
