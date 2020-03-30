<div class="list-icons list-icons-extended">

    <a href="{{route($route.'.show',[$item->id])}}{{getRouteParameters()}}"
       class="list-icons-item" data-popup="tooltip"
       title="{{trans('app.view')}}">
        <i class="icon-eye"></i>
    </a>
    @if($route == "gifs")
        @php($favs = App\Favorite::where('user_id', Auth::user()->id)->get())
        @php( $found = false)
        @foreach($favs as $fav)
            @if($fav->gif_id == $item->id)
                @php($found = true)
            @endif
        @endforeach
        @if(!$found)
            <a href="{{route($route.'.addToFavorite',[$item->id])}}{{getRouteParameters()}}"
               class="list-icons-item" data-popup="tooltip"
               title="{{trans('app.addToFavorite')}}">
                <i class="icon-heart6"></i>
            </a>
            @else
            <a href="{{route($route.'.deleteFromFavorite',[$item->id])}}{{getRouteParameters()}}"
               class="list-icons-item" data-popup="tooltip"
               title="{{trans('app.deleteFromFavorite')}}">
                <i class="icon-heart5"></i>
            </a>
        @endif
    @endif
    @if($route == "gifs")
        <a href="{{route($route.'.edit',[$item->id])}}{{getRouteParameters()}}"
           class="list-icons-item" data-popup="tooltip"
           title="{{trans('app.edit')}}">
            <i class="icon-database-edit2"></i>
        </a>
    @endif

    <a href="#" data-id="{{$item->id}}" class="list-icons-item btn-delete"
       data-modal="{{$route}}"
       data-name="{{$item->name}}"
       data-popup="tooltip"
       title="{{trans('app.delete')}}" data-toggle="modal" data-trigger="hover"
       data-target="#delete-modal">
        <i class="icon-database-remove"></i>
    </a>

    @foreach($actions as $action)
        <a href="{{route($route.'.'.$action,[$item->id])}}{{getRouteParameters()}}"
           class="list-icons-item" data-popup="tooltip"
           title="{{trans('app.'.$action)}}">
            <i class="icon-{{getActionIcon($action)}}"></i>
        </a>
    @endforeach
</div>