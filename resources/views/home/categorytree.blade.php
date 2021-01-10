@foreach($children as $subcategory)

    <ul>
        @if(count($subcategory->children))
            <li>{{$subcategory->title}}</li>
            <ul>
                @include('categorytree',['children'=>$rs->children])
            </ul>
        @else
            <li>{{$subcategory->title}}</li>
        @endif
    </ul>

@endforeach
