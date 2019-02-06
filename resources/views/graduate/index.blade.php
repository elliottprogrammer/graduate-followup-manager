@extends('layouts.app')

@section('content')
<div class="row">
    <div class="content-box clearfix">
        <table id="grad_table" class="grad-table white highlight centered responsive-table">
            <thead>
                <tr>
                    <th></th>
                    <th>Graduate Name</th>
                    <th>Grad Date</th>
                    <th>Status</th>
                    <th>Condition</th>
                    <th>Last Contacted</th>
                    <th>Next Call Date</th>
                </tr>
            </thead>
    
            <tbody>
                @if (count($graduates) > 0)
                    @foreach ($graduates as $graduate)
                        <tr onClick="javascript:window.location = '/graduates/{{$graduate->id}}/'">
                        <td class="@isset($graduate->next_call_date) {{ ($graduate->next_call_date->lte(Carbon\Carbon::today()) ? 'red' : 'green') }} @endisset"></td>
                        <td>{{$graduate->first_name}} {{$graduate->last_name}}</td>
                        <td data-sort="@isset($graduate->graduation_date){{ $graduate->graduation_date->format('d-m-Y') }}@endisset">@isset($graduate->graduation_date){{ $graduate->graduation_date->format('D, M jS, Y') }}@endisset</td>
                        <td>{{$graduate->status}}</td>
                        <td>{{$graduate->condition}}</td>
                        <td data-sort="@isset($graduate->last_contacted){{ $graduate->last_contacted->format('d-m-Y') }}@endisset">@isset($graduate->last_contacted){{ $graduate->last_contacted->format('D, M jS, Y') }}@endisset</td>
                        <td data-sort="@isset($graduate->next_call_date){{ $graduate->next_call_date->format('d-m-Y') }}@endisset">@isset($graduate->next_call_date){{ $graduate->next_call_date->format('D, M jS, Y') }}@endisset</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
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
    <div class="titlebar__title">Dashboard</div>
    <div class="titlebar__nav">
        <ul class="title-nav">
            <li><a href="/calendar-view">Calendar View</a></li>
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
<link rel="stylesheet" href="{{ url('/css/datatables.materialize.css') }}">
@endsection

@section('scripts')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js" defer></script>
<script>
    $(document).ready( function () {
        $('#grad_table').DataTable({
            paging: false,
            ordering: true,
            order: [ 2, 'asc' ]
        });
    });
</script>
@endsection