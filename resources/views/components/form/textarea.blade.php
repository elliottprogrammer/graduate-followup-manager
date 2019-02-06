<div class="input-field">
    {{ Form::textarea($name, $value, array_merge(['class' => 'materialize-textarea', 'id' => $name], $attributes)) }}
    {{ Form::label($name, $label) }}
    <span class="helper-text red-text" role="alert" data-error="{{$label}} is required">{{ $errors->first($name) }}</span>
</div>