<header class="{{ config('backpack.base.header_class') }}">

    <!-- Sidebar Btn -->
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto ml-3" type="button" data-toggle="sidebar-show" aria-label="{{ trans('backpack::base.toggle_navigation')}}">
        <span><i class="las la-bars" style="color:white;"></i></span>
    </button>

    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show" aria-label="{{ trans('backpack::base.toggle_navigation')}}" style="margin-left:15px">
        <span><i class="las la-bars" style="color:white;"></i></span>
    </button>

    <!-- Logo -->
    <a class="navbar-brand" href="{{ url(config('backpack.base.home_link')) }}" title="{{ config('backpack.base.project_name') }} " style="width:250px; color:white;">
        {!! config('backpack.base.project_logo') !!}
    </a>

    @include(backpack_view('inc.menu'))
</header>
