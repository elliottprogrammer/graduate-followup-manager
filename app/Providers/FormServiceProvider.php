<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('mdText', 'components.form.text', ['label', 'name', 'value' => null, 'attributes' => []]);
        Form::component('mdText_readonly', 'components.form.text-readonly', ['label', 'name', 'value' => null, 'attributes' => []]);
        Form::component('mdTextarea', 'components.form.textarea', ['label', 'name', 'value' => null, 'attributes' => []]);
        Form::component('mdTextarea_readonly', 'components.form.textarea-readonly', ['label', 'name', 'value' => null, 'attributes' => []]);
        Form::component('mdSelect', 'components.form.select', ['label', 'name', 'list' => [], 'selected' => null, 'selectAttributes' => [], 'optionAttributes' => []]);
        Form::component('mdSubmit', 'components.form.submit', ['value' => 'Submit', 'attributes' => []]);
        Form::component('hidden', 'components.form.hidden', ['name', 'value' => null, 'attributes' => []]);
        Form::component('mdText', 'components.form.text', ['label', 'name', 'value' => null, 'attributes' => []]);
        Form::component('mdRadio', 'components.form.radio', ['id', 'name', 'text', 'value', 'checked']);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
