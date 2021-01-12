<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($slider as $rs)
                            <div class="item @if ($loop->first) active @endif">
                                <div class="col-sm-5">
                                    <h1><span>{{$rs->price}}TL</span></h1>
                                    <h2>{{$rs->title}}</h2>
                                    <a type="button" class="btn btn-default get" href="{{route('house',['id'=>$rs->id,'slug'=>$rs->slug])}}">Detail</a>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{Storage::url($rs->image)}}" class="girl img-responsive"
                                         alt="" style="width: 100%; height: 300px;">
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
