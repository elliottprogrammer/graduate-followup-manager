<!-- Follow-up Note Modal -->
<div id="modal_add-note" class="modal">
    {!! Form::open(['action' => 'NotesController@store', 'method' => 'POST', 'id' => 'add_note_form', 'novalidate' => 'novalidate']) !!}
        {{ Form::hidden('graduate_id', $graduate->id) }}
        {{ Form::hidden('date', date('Y-m-d H:i:s')) }}
        <div class="modal-content">
            <div class="modal-title">
                <h2 class="title-with-meta">Add Follow-Up Note</h2>
                <div class="meta">{{ date('D, M jS, Y') }}<br>{{$graduate->first_name}} {{$graduate->last_name}}</div>
            </div>
            <div class="row">
                <div class="radio mb10">
                    <p><label class="solo">Was Graduate Contacted?</label></p>
                    {{ Form::mdRadio('contacted1', 'contacted', 'No', '0', true) }}
                    {{ Form::mdRadio('contacted2', 'contacted', 'Yes', '1', null) }}
                </div>
                <div id="more-questions">
                    <div class="radio">
                        <p><label class="solo">Is Graduate Sober?</label></p>
                        {{ Form::mdRadio('sober1', 'sober', 'No', '0', null) }}
                        {{ Form::mdRadio('sober2', 'sober', 'Yes', '1', null) }}
                    </div>
                    <div class="radio">
                        <p><label class="solo">Is Graduate Productive, Working, or Going To School?</label></p>
                        {{ Form::mdRadio('working1', 'working', 'No', '0', null) }}
                        {{ Form::mdRadio('working2', 'working', 'Yes', '1', null) }}
                    </div>
                    <div class="mt40">
                        <div class="input-field">
                            {{ Form::mdTextarea('Is Graduate Following Battle-Plan? Explain.', 'battle-plan', null) }}
                        </div>
                    </div>
                </div> <!-- /.more-questions -->
                <div class="input-field">
                    {{ Form::mdTextarea('Notes:', 'note', null, ['class' => 'materialize-textarea validate', 'required' => 'required']) }}
                </div>
            </div>  
        </div>
        <div class="modal-footer">
            <a href="#" class="modal-close waves-effect waves-blue btn-flat">Close</a>
            {{ Form::mdSubmit('SAVE NOTE', ['class' => 'modal-action btn waves-effect waves-blue blue darken-3']) }}
        </div>
    {!! Form::close() !!}
</div>