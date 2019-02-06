<div class="input-field">
    {{ Form::text($name, $value, array_merge(['readonly' => 'readonly', 'id' => $name], $attributes)) }}
    {{ Form::label($name, $label, ['class' => 'forceActive']) }}
</div>