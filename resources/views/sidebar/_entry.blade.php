<!-- Main navigation -->
<div class="card card-sidebar-mobile">
    <ul class="nav nav-sidebar" data-nav-type="accordion">

        <!-- Main -->
        <li class="nav-item-header">
            <div class="text-uppercase font-size-xs line-height-xs">{{trans('app.menu')}}</div>
            <i class="icon-menu" title="{{trans('app.menu')}}"></i>
        </li>

        <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link {{request()->is('*/home') ? 'active' : ''}}">
                <i class="icon-home4"></i>
                <span>{{trans('app.dashboard')}}</span>
            </a>
        </li>

        <!-- Gif -->
        <li class="nav-item">
            <a href="{{route('gifs.index')}}"
               class="nav-link {{request()->is('*/gifs/*') || request()->is('*/gifs') ? 'active' : ''}}">
                <i class="icon-images3"></i>
                <span>{{trans('app.gifs')}}</span>
            </a>
        </li>
        <!-- End Gif -->

        <!-- Favorites -->
        <li class="nav-item">
            <a href="{{route('favorites.index')}}"
               class="nav-link {{request()->is('*/favorites/*') || request()->is('*/favorites') ? 'active' : ''}}">
                <i class="icon-bookmark4"></i>
                <span>{{trans('statistics.favorites')}}</span>
            </a>
        </li>
        <!-- End Favorites -->

        <!-- Histories -->
        <li class="nav-item">
            <a href="{{route('histories.index')}}"
               class="nav-link {{request()->is('*/histories/*') || request()->is('*/histories') ? 'active' : ''}}">
                <i class="icon-history"></i>
                <span>{{trans('statistics.histories')}}</span>
            </a>
        </li>
        <!-- End Histories -->


    </ul>
</div>
<!-- /main navigation -->
