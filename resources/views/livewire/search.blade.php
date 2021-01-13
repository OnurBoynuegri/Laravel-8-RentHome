<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <input wire:model="search" name="search" type="text"  list="mylist"
           placeholder="Search house..."/>

    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist as $rs)
                <option value="{{$rs->title}}">{{$rs->category->title}}</option>
            @endforeach
        </datalist>
    @endif
</div>
