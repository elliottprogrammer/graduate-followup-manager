@extends('layouts.app')

@section('content')
<div class="content-box graduate-form clearfix">
    <h2 class="default-title">Graduate Contact Information</h2>
    {!! Form::open(['action' => 'GraduatesController@store', 'method' => 'POST', 'novalidate' => 'novalidate']) !!}
    <div class="row">
        <div class="col s12">
            <div class="row">
                <div class="col s12 m6 l2">
                    {{ Form::mdText('First Name', 'first_name', null, ['required' => 'required']) }}
                </div>
                <div class="col s12 m6 l2">
                    {{ Form::mdText('Last Name', 'last_name', null, ['required' => 'required']) }}
                </div>
                <div class="col s12 m6 l2">
                    {{ Form::mdSelect('Condition', 'condition', ['Good' => 'Good', 'Suspicious' =>'Suspicious', 'Relapsed' => 'Relapsed'], 'Select', ['placeholder' => 'Select']) }}
                </div>
                <div class="col s12 m6 l2">
                    {{ Form::mdSelect('Status', 'status', ['Active' => 'Active', 'Inactive' => 'Inactive'], 'Active', ['placeholder' => 'Select'], ['required' => 'required']) }}
                </div>
                <div class="col s12 m6 l2">
                    {{ Form::mdText('Last Contacted', 'last_contacted', null, ['class' => 'datepicker']) }}
                </div>
                <div class="col s12 m6 l2">
                    {{ Form::mdText('Next Call Date', 'next_call_date', null, ['class' => 'datepicker']) }}
                </div>
            </div>
            <div class="row">
                <div class="col s12 m6 l4">
                    {{ Form::mdText('Street Address', 'street_address', null) }}
                </div>
                <div class="col s12 m6 l2">
                    {{ Form::mdText('City', 'city', null) }}
                </div>
                <div class="col s12 m6 l1">
                    {{ Form::mdText('State', 'state', null) }}
                </div>
                <div class="col s12 m6 l1">
                    {{ Form::mdText('Zip Code', 'zip', null) }}
                </div>
                <div class="col s12 m6 l2">
                    {{ Form::mdText('Date of Birth', 'date_of_birth', null, ['class' => 'datepicker']) }}
                </div>
                <div class="col s12 m6 l2">
                    {{ Form::mdText('Graduation Date', 'graduation_date', null, ['class' => 'datepicker', 'required' => 'required']) }}
                </div>
            </div>
            <div class="row">
                <div class="col s12 m6 l2">
                    {{ Form::mdText('Primary Phone', 'phone1', null, ['required' => 'required']) }}
                </div>
                <div class="col s12 m6 l2">
                    {{ Form::mdText('Alt Phone 1', 'alt_phone1', null) }}
                </div>
                <div class="col s12 m6 l2">
                    {{ Form::mdText('Alt Phone 2', 'alt_phone2', null) }}
                </div>
                <div class="col s12 m6 l2">
                    {{ Form::mdText('Email', 'email1', null) }}
                </div>
                <div class="col s12 m6 l2">
                    {{ Form::mdSelect('Gender', 'gender', ['Male' => 'Male', 'Female' => 'Female'], null, ['placeholder' => 'Select']) }}
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    {{ Form::mdTextarea('Additional Notes', 'additional_notes', null) }}
                </div>
            </div>
        </div>
    </div> <!-- /.row -->
    <h2 class="default-title">Designated Family Member Contact Information</h2>
    <div class="row">
        <div class="col s12">
            <div class="row">
                <div class="col s12 m6 l2">
                    {{ Form::mdText('First Name','fam_first_name', null) }}
                </div>
                <div class="col s12 m6 l2">
                    {{ Form::mdText('Last Name','fam_last_name', null) }}
                </div>
                <div class="col s12 m6 l2">
                    {{ Form::mdText('Relationship','fam_relationship', null) }}
                </div>
                <div class="col s12 m6 l6">
                </div>
            </div>
            <div class="row">
                <div class="col s12 m6 l4">
                    {{ Form::mdText('Street Address','fam_street_address', null) }}
                </div>
                <div class="col s12 m6 l2">
                    {{ Form::mdText('City','fam_city', null) }}
                </div>
                <div class="col s12 m6 l1">
                    {{ Form::mdText('State','fam_state', null) }}
                </div>
                <div class="col s12 m6 l1">
                    {{ Form::mdText('Zip Code','fam_zip', null) }}
                </div>
            </div>
            <div class="row">
                <div class="col s12 m6 l2">
                    {{ Form::mdText('Primary Phone','fam_phone1', null) }}
                </div>
                <div class="col s12 m6 l2">
                    {{ Form::mdText('Alt Phone 1','fam_alt_phone1', null) }}
                </div>
                <div class="col s12 m6 l2">
                    {{ Form::mdText('Alt Phone 2','fam_alt_phone2', null) }}
                </div>
                <div class="col s12 m6 l2">
                    {{ Form::mdText('Email','fam_email1', null) }}
                </div>
                <div class="col s12 m6 l2">
                    {{ Form::mdSelect('Gender', 'fam_gender', ['Male' => 'Male', 'Female' => 'Female'], null, ['placeholder' => 'Select']) }}
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    {{ Form::mdTextarea('Additional Notes', 'fam_additional_notes', null) }}
                </div>
            </div>
        </div>
    </div> <!-- /.row -->
    <div class="row">
        <div class="col s12">
            <div class="center-align">
                <a href="/" class="btn btn-flat btn-large waves-effect waves light">CANCEL</a>
                {{ Form::mdSubmit('SAVE NEW GRADUATE INFO', ['class' => 'btn btn-large waves-effect waves-light']) }}
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div> <!-- /.content-box -->
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
    <div class="titlebar__title">Add New Graduate</div>
    <div class="titlebar__nav">
        <ul class="title-nav">
            <li><a href="/">Dashboard</a></li>
            <li><a href="/calendar-view">Calendar View</a></li>
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
    document.addEventListener('DOMContentLoaded', function() {
        var options = {};
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems, options);
    });
    document.addEventListener('DOMContentLoaded', function() {
        var last_contacted = M.Datepicker.init(document.getElementById('last_contacted'), {
            format: 'ddd, mmm d, yyyy',
            setDefaultDate: true
        });
        var next_call_date = M.Datepicker.init(document.getElementById('next_call_date'), {
            format: 'ddd, mmm d, yyyy',
            setDefaultDate: true
        });
        var date_of_birth = M.Datepicker.init(document.getElementById('date_of_birth'), {
            format: 'ddd, mmm d, yyyy',
            setDefaultDate: true,
            yearRange: [{{ Carbon\Carbon::now()->subYears(70)->format('Y-m-d') }}, {{ Carbon\Carbon::now()->subYears(16)->format('Y-m-d')}}]
        });
        var graduation_date = M.Datepicker.init(document.getElementById('graduation_date'), {
            format: 'ddd, mmm d, yyyy',
            setDefaultDate: true
        });
    });
    @if($errors->any())
         @foreach ($errors->all() as $error)
            window.addEventListener('load', function() {
                M.toast({ html: "{{$error}}" });
            });
        @endforeach
    @endif
</script>
@endsection
