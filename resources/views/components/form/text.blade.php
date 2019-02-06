<div class="input-field">
    {{ Form::text($name, $value, array_merge(['class' => 'validate', 'id' => $name, 'name' => $name], $attributes)) }}
    {{ Form::label($name, $label) }}
    <span class="helper-text red-text" role="alert" data-error="{{$label}} is required">{{ $errors->first($name) }}</span>
</div>