  @foreach($children as $subcategory)


    @if(count($subcategory->children))

        <li><a href="#">{{$subcategory->title}} <span class="caret"></span></a>
            <ul class="dropdown-menu">
            @include('home.categorytree',['children' => $subcategory->children])
            </ul>

    @else
            <li><a href="#">{{$subcategory->title}}</a></li>
        @endif

@endforeach
