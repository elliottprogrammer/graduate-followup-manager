@extends('layouts.app')

@section('content')
<div class="content-box graduate-form clearfix">
    <div class="row">
        <div class="col s12 m10">
            <h2 class="default-title mb50">Graduate Contact Information</h2>
            <div class="row">
                <div class="col s12">
                    <div class="row">
                        <div class="col s12 m6 l2">
                            {{ Form::mdText_readonly('First Name', 'first_name', $graduate->first_name) }}
                        </div>
                        <div class="col s12 m6 l2">
                            {{ Form::mdText_readonly('Last Name', 'last_name', $graduate->last_name) }}
                        </div>
                        <div class="col s12 m6 l2">
                            {{ Form::mdText_readonly('Condition', 'condition', $graduate->condition) }}
                        </div>
                        <div class="col s12 m6 l2">
                            {{ Form::mdText_readonly('Status', 'status', $graduate->status) }}
                        </div>
                        <div class="col s12 m6 l2">
                            {{ Form::mdText_readonly('Last Contacted', 'last_contacted', ($graduate->last_contacted ? date('D, M jS, Y', strtotime($graduate->last_contacted)) : '')) }}
                        </div>
                        <div class="col s12 m6 l2">
                            {{ Form::mdText_readonly('Next Call Date', 'next_call_date', ($graduate->next_call_date ? date('D, M jS, Y', strtotime($graduate->next_call_date)) : '')) }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m6 l4">
                            {{ Form::mdText_readonly('Street Address', 'street_address', $graduate->street_address) }}
                        </div>
                        <div class="col s12 m6 l2">
                            {{ Form::mdText_readonly('City', 'city', $graduate->city) }}
                        </div>
                        <div class="col s12 m6 l1">
                            {{ Form::mdText_readonly('State', 'state', $graduate->state) }}
                        </div>
                        <div class="col s12 m6 l1">
                            {{ Form::mdText_readonly('Zip Code', 'zip', $graduate->zip) }}
                        </div>
                        <div class="col s12 m6 l2">
                            {{ Form::mdText_readonly('Date of Birth', 'date_of_birth', ($graduate->date_of_birth ? date('D, M j, Y', strtotime($graduate->date_of_birth)) : '')) }}
                        </div>
                        <div class="col s12 m6 l2">
                            {{ Form::mdText_readonly('Graduation Date', 'graduation_date', ($graduate->graduation_date ? date('D, M j, Y', strtotime($graduate->graduation_date)) : '')) }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m6 l2">
                            {{ Form::mdText_readonly('Primary Phone', 'phone1', $graduate->phone1) }}
                        </div>
                        <div class="col s12 m6 l2">
                            {{ Form::mdText_readonly('Alt Phone 1', 'alt_phone1', $graduate->alt_phone1) }}
                        </div>
                        <div class="col s12 m6 l2">
                            {{ Form::mdText_readonly('Alt Phone 2', 'alt_phone2', $graduate->alt_phone2) }}
                        </div>
                        <div class="col s12 m6 l2">
                            {{ Form::mdText_readonly('Email', 'email1', $graduate->email1) }}
                        </div>
                        <div class="col s12 m6 l2">
                            {{ Form::mdText_readonly('Gender', 'gender', $graduate->gender) }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            {{ Form::mdTextarea_readonly('Additional Notes', 'additional_notes', $graduate->additional_notes) }}
                        </div>
                    </div>
                </div>

            </div> <!-- /.row -->
            <h2 class="default-title mb50">Designated Family Member Contact Information</h2>
            <div class="row">
                <div class="col s12">
                    <div class="row">
                        <div class="col s12 m6 l2">
                            {{ Form::mdText_readonly('First Name','fam_first_name', $graduate->fam_first_name) }}
                        </div>
                        <div class="col s12 m6 l2">
                            {{ Form::mdText_readonly('Last Name','fam_last_name', $graduate->fam_last_name) }}
                        </div>
                        <div class="col s12 m6 l2">
                            {{ Form::mdText_readonly('Relationship','fam_relationship', $graduate->fam_relationship) }}
                        </div>
                        <div class="col s12 m6 l6">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m6 l4">
                            {{ Form::mdText_readonly('Street Address','fam_street_address', $graduate->fam_street_address) }}
                        </div>
                        <div class="col s12 m6 l2">
                            {{ Form::mdText_readonly('City','fam_city', $graduate->fam_city) }}
                        </div>
                        <div class="col s12 m6 l1">
                            {{ Form::mdText_readonly('State','fam_state', $graduate->fam_state) }}
                        </div>
                        <div class="col s12 m6 l1">
                            {{ Form::mdText_readonly('Zip Code','fam_zip', $graduate->fam_zip) }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12 m6 l2">
                            {{ Form::mdText_readonly('Primary Phone','fam_phone1', $graduate->fam_phone1) }}
                        </div>
                        <div class="col s12 m6 l2">
                            {{ Form::mdText_readonly('Alt Phone 1','fam_alt_phone1', $graduate->fam_alt_phone1) }}
                        </div>
                        <div class="col s12 m6 l2">
                            {{ Form::mdText_readonly('Alt Phone 2','fam_alt_phone2', $graduate->fam_alt_phone2) }}
                        </div>
                        <div class="col s12 m6 l2">
                            {{ Form::mdText_readonly('Email','fam_email1', $graduate->fam_email1) }}
                        </div>
                        <div class="col s12 m6 l2">
                            {{ Form::mdText_readonly('Gender', 'fam_gender', $graduate->fam_gender) }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            {{ Form::mdTextarea_readonly('Additional Notes', 'fam_additional_notes', $graduate->fam_additional_notes) }}
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
            
        </div>
        <div class="col s12 m2">
            <!-- Small side column section -->
            <ul class="action-buttons">
                <li>
                    <a href="/graduates/{{$graduate->id}}/edit" class="btn btn-large btn100 waves-effect waves-light blue darken-3">EDIT GRADUATE INFO</a>
                </li>
                <li>
                    <a href="#modal_add-note" class="btn btn-large btn100 waves-effect waves-light blue darken-3 modal-trigger">ADD FOLLOW-UP NOTE</a>
                </li>
            </ul>
        </div>
    </div> <!-- /.row> -->
    <div class="row">
        <div class="col s12 m10">
            <h2 class="default-title">Follow-Up Notes</h2>
            <ul class="timeline">
                @if (count($notes) > 0)
                    @foreach($notes as $note)
                        <li class="{{($note->contacted ? 'contacted' : 'not-contacted')}}">
                            <span class="timeline__date">{{date('D, M jS, Y', strtotime($note->date))}}</span>
                            <span class="timeline__right">{{($note->contacted ? 'Contacted' : 'Not Contacted')}}</span>
                            @if($note->sober)
                                <div class="label"><label>Sober?</label> {{ ($note->sober ? 'Yes' : 'No') }}</div>
                            @endif
                            @if($note->working)
                                <div class="label"><label>Productive, working, or school?</label> {{ ($note->working ? 'Yes' : 'No') }}</div>
                            @endif
                            @if($note->battle_plan)
                                <div class="label"><label>Following battle-plan?</label></div>
                                <p>{{ $note->battle_plan }}</p>
                            @endif
                            <div class="label"><label>Notes:</label></div>
                            <p>{{$note->note}}</p>
                        </li>   
                    @endforeach
                @endif
            </ul>
        </div>
        <div class="col s12 m2">
            {{-- TODO: Mini calendar for notes, color coded days, showing contacted or not-contacted. --}}
        </div>
    </div> <!-- /.row -->
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
    <div class="titlebar__title">{{$graduate->first_name}} {{$graduate->last_name}}</div>
    <div class="titlebar__nav">
        <ul class="title-nav">
            <li><a href="/">Dashboard</a></li>
            <li><a href="/calendar-view">Calendar View</a></li>
        </ul>
    </div> 
</div>
@endsection

@section('modals')
    @include('components.modals.addNote')
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
        var options = {
            onOpenStart: function() {
                var form = document.getElementById('add_note_form');
                var selectElem = form.querySelectorAll('select');
                var instances = M.FormSelect.init(selectElem);
                // show/hide #more-questions in modal
                var moreQuestions = form.querySelector('#more-questions');
                var moreQuestions_inputs = moreQuestions.querySelectorAll('input');
                var radios = form.querySelectorAll('input[name="contacted"]')
                for (var i=0; i < radios.length; i++) {
                    radios[i].addEventListener('click', function(e) {
                        if (e.target.value == 1) {
                            moreQuestions.classList.add('open');
                        } else {
                            for (var i=0; i < moreQuestions_inputs.length; i++) {
                                moreQuestions_inputs[i].checked = false;
                            }
                            form.getElementById('battle-plan').value = '';
                            moreQuestions.classList.remove('open');
                        }
                    });
                }
                var note = form.querySelector('#note');
                form.addEventListener('submit', function(e) {
                    if (note.value === '') {
                        e.preventDefault();
                        note.classList.add('invalid');
                    } else {
                        form.querySelector('input[type="submit"]').setAttribute('disabled', 'disabled');

                    }
                });
            },
            onCloseEnd: function() {
                var form = document.querySelector('#add_note_form');
                var contacted1 = form.querySelector('#contacted1');
                var contacted2 = form.querySelector('#contacted2')
                var sober1 = form.querySelector('#sober1');
                var sober2 = form.querySelector('#sober2');
                var working1 = form.querySelector('#working1');
                var working2 = form.querySelector('#working2');
                var moreQuestions = form.querySelector('#more-questions');
                var note = form.querySelector('#note'); 
                form.querySelector('button[type="submit"]').removeAttribute('disabled');
                // reset form values
                contacted1.checked = true;
                contacted2.checked = false;
                sober1.checked = false;
                sober2.checked = false;
                working1.checked = false;
                working2.checked = false;
                moreQuestions.classList.remove('open');
                note.value = '';
            }
        };
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems, options);    
    });
    @if(session()->has('success'))
    window.addEventListener('load', function() {
        M.toast({ html: "{{session('success')}}" });
    });
    @endif
    @if($errors->any())
         @foreach ($errors->all() as $error)
            window.addEventListener('load', function() {
                M.toast({ html: "{{$error}}" });
            });
        @endforeach
    @endif
</script>
@endsection
