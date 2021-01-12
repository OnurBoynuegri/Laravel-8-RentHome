@foreach($children as $subcategory)

    <ul>
        @if(count($subcategory->children))
            <li>{{$subcategory->title}}</li>
            <ul>
                @include('categorytree',['children'=>$rs->children])
            </ul>
        @else
            <li><a href="{{route('categoryhouses',['id'=>$subcategory->id,'slug'=>$subcategory->title,])}}">{{$subcategory->title}}</a></li>
        @endif
    </ul>

@endforeach
