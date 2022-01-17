  @foreach($children as $subcategory)


    @if(count($subcategory->children))

        <li><a >{{$subcategory->title}} <span class="caret"></span></a>

{{--            yukardaki ahrefe {{route('home')}} koyabilirsin hata verirse--}}

            <ul class="dropdown-menu">
            @include('home.categorytree',['children' => $subcategory->children])
            </ul>

    @else

            <li><a href="{{route('categorycars',['id'=>$subcategory->id])}}">{{$subcategory->title}}</a></li>
        @endif

@endforeach
