<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->

@if(backpack_user()->hasRole('admin'))
{
    {{--Home--}}
    <li class="nav-item">
        <a class="nav-link" href="{{ backpack_url('dashboard') }}" id="menu_text"><i class="las la-tachometer-alt" style="margin-right:0.5em;"></i> {{ trans('backpack::base.dashboard') }}</a>
    </li>

    {{--User--}}
    <li class="nav-title" style="font-size: 14px; border-top: 1px solid #0000001c;">users</li>

    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('teacher') }}' id="menu_text" style="margin-left:10px">
        <i class="las la-chalkboard-teacher" style="margin-right:0.5em;"></i> Teachers</a>
    </li>

    <li class='nav-item'>
        <a class='nav-link' href='{{ backpack_url('student') }}' id="menu_text" style="margin-left:10px"><i class="las la-user-friends" style="margin-right:0.5em;"></i> Students</a>
    </li>

    {{--Class--}}
    <li class="nav-title" style="font-size: 14px; border-top: 1px solid #0000001c;">Class</li>

    <li class='nav-item'>
        <a class='nav-link' href='{{ backpack_url('subject') }}' id="menu_text" style="margin-left:10px"><i class="lar la-address-book" style="margin-right:0.5em;"></i> Subjects</a>
    </li>

    <li class='nav-item'>
        <a class='nav-link' href='{{ backpack_url('group') }}' id="menu_text" style="margin-left:10px"><i class="las la-users" style="margin-right:0.5em;"></i> Groups</a>
    </li>

    <li class='nav-item'>
        <a class='nav-link' href='{{ backpack_url('classroom') }}' id="menu_text" style="margin-left:10px"><i class="lab la-elementor" style="margin-right:0.5em;"></i> Schedule</a>
    </li>

    {{--Authentication--}}

    <li class="nav-title" style="font-size: 14px; border-top: 1px solid #0000001c;">Authentication</li>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}" id="menu_text" style="margin-left:10px"><i class="nav-icon la la-user"></i>Users</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}" id="menu_text" style="margin-left:10px"><i class="nav-icon la la-id-badge"></i>Roles</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}" id="menu_text" style="margin-left:10px"><i class="nav-icon la la-key"></i>Permissions</a></li>
}
@elseif (backpack_user()->hasRole('teacher'))
{
    {{--Home--}}
    <li class="nav-item">
        <a class="nav-link" href="{{ backpack_url('dashboard') }}" id="menu_text"><i class="las la-tachometer-alt" style="margin-right:0.5em;"></i> {{ trans('backpack::base.dashboard') }}</a>
    </li>

    <li class='nav-item'>
        <a class='nav-link' href='{{ backpack_url('student') }}' id="menu_text"><i class="las la-user-friends" style="margin-right:0.5em;"></i> Students</a>
    </li>

    <li class='nav-item'>
        <a class='nav-link' href='{{ backpack_url('classroom') }}' id="menu_text"><i class="lab la-elementor" style="margin-right:0.5em;"></i> Schedule</a>
    </li>
}
@endif
