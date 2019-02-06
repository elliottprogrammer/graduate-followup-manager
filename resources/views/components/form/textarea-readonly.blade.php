<div class="input-field">
    {{ Form::textarea($name, $value, array_merge(['readonly' => 'readonly', 'class' => 'materialize-textarea', 'id' => $name], $attributes)) }}
    {{ Form::label($name, $label, ['class' => 'forceActive']) }}
</div>