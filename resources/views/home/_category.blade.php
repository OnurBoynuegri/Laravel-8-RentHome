@php
    $parentCategories=\App\Http\Controllers\HomeController::categorylist()
@endphp
<!--category-products-->

    <div class="left-sidebar">
        <h2>Category</h2>
        <div class="panel-group category-products">
            @foreach($parentCategories as$rs)
                <div class="panel panel-default">
                    <div class="panel-heading">

                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordian" href="#{{$rs->id}}">
                                <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                {{$rs->title}}
                            </a>
                        </h4>
                    </div>
                    @if(count($rs->children))
                        <div id="{{$rs->id}}" class="panel-collapse collapse">
                            <div class="panel-body">
                                @include('home.categorytree',['children'=>$rs->children])
                            </div>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
        <!--/category-products-->
    </div>
