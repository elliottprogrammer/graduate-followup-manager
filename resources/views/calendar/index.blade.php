@extends('layouts.app')

@section('content')
<div class="row">
    <div class="content-box clearfix">
        {!! $calendar->calendar() !!}
    </div>
</div>
@endsection

@section('userinfo')
<div class="userinfo">
    <div class="userinfo__name">
        <span class="user-icon"><i class="material-icons">account_circle</i></span> {{ Auth::user()->name }}
    </div>
    <div class="userinfo__options">
        <a class="dropdown-trigger" href="#" data-target="user-links1"><i class="material-icons">settings</i></a>
    </div>
    <div id="dropdown-links">
        <ul id="user-links1" class="dropdown-content">
            {{-- <li><a href="/user-profile"><i class="material-icons">account_box</i> Profile</a></li>
            <li class="divider" tabindex="-1"></li> --}}
            <li><a href="{{ route('logout') }}" onClick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i class="material-icons">exit_to_app</i> Logout</a></li>
            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </ul>
    </div>
</div>
@endsection

@section('titlebar')
<div class="titlebar with-nav">
    <div class="titlebar__title">Calendar View</div>
    <div class="titlebar__nav">
        <ul class="title-nav">
            <li><a href="/">Dashboard</a></li>
            <li><a href="/graduates/create" class="waves-effect waves-light blue darken-3"><i class="material-icons left">person_add</i> Add New Graduate</a></li>
        </ul>
    </div> 
</div>
@endsection

@section('materialize_scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var options = {
            alignment: 'right',
            constrainWidth: false,
            coverTrigger: false,
            container: '#dropdown-links'
        };
        var elems = document.querySelectorAll('.dropdown-trigger');
        var instances = M.Dropdown.init(elems, options);
    });
</script>
@endsection

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css"/>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.23.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
    {!! $calendar->script() !!}
@endsection