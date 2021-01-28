<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link href="{{asset('assets')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/prettyPhoto.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/price-range.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/animate.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/main.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]>
    <script src="{{asset('assets')}}/js/html5shiv.js"></script>
    <script src="{{asset('assets')}}/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{asset('assets')}}/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="{{asset('assets')}}/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="{{asset('assets')}}/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="{{asset('assets')}}/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="{{asset('assets')}}/images/ico/apple-touch-icon-57-precomposed.png">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    @yield('css')
    @yield('headerjs')
</head><!--/head-->
<body>
<section>
    <div class="container">
        <div class="row">
        <div class="col-md-12 col-sm-12 center-margin">
            <div class="x_panel">
                <div class="x_title">
                    <h2>{{$data->title}}</h2>

                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <br>
                    <form role="form" action="{{route('user_image_store',['house_id' => $data->id])}}"
                          method="post"
                          class="form-horizontal form-label-left" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"> Title
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" name="title" required="required" class="form-control">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Image</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input class="form-control" type="file" required="required" name="image">
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="form-group row">
                            <div class="col-md-6 col-sm-6 offset-md-5">
                                <button type="submit" class="btn btn-primary">Add Image</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="col-md-12 center-margin">
            <div class="row">
                <div class="col-sm-12 padding-right">
                    <div class="features_items"><!--features_items-->

                        @foreach($images as $rs)
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img style="width: 100%; height: 207px; display: block;"
                                                 src="{{Storage::url($rs->image)}}" alt="">
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2>Name : {{$rs->title}}</h2>
                                                <a class="btn btn-outline-danger"
                                                   href="{{route('user_image_delete',['id' => $rs->id,'house_id' => $data->id])}}"
                                                   onclick="return confirm('House will be Deleted! Are you sure?')">
                                                    <i class="fa fa-times"></i> Delete </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div><!--features_items-->
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</section>
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/js/jquery.scrollUp.min.js"></script>
<script src="{{asset('assets')}}/js/price-range.js"></script>
<script src="{{asset('assets')}}/js/jquery.prettyPhoto.js"></script>
<script src="{{asset('assets')}}/js/main.js"></script>

</body>
</html>
