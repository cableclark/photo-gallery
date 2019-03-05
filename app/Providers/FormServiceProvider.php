<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;
class FormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Form::component('text', 'components.form.text', ['name', 'value'=>null, 'atttributes'=>[]]);
        Form::component('textarea', 'components.form.textarea', ['name', 'value'=>null, 'atttributes'=>[]]);
        Form::component('submit', 'components.form.text', [ 'value'=>'Submit', 'atttributes'=>[]]);
        Form::component('hidden', 'components.form.text', ['name', 'value'=>null, 'atttributes'=>[]]);
        Form::component('file', 'components.form.text', ['name',  'atttributes'=>[]]);
    }
}
