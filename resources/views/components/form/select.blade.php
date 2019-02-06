<div class="input-field">
    {{ Form::select($name, $list, $selected, $selectAttributes, $optionAttributes) }}
    {{ Form::label($name, $label) }}
    <span class="helper-text red-text" role="alert" data-error="{{$label}} is required">{{ $errors->first($name) }}</span>
</div>