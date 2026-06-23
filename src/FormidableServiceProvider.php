<?php namespace Ixudra\Formidable;


use Illuminate\Support\ServiceProvider;

class FormidableServiceProvider extends ServiceProvider {

    /**
     * @var bool
     */
    protected $defer = false;


    /**
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Formidable', function () {
                return new FormidableService();
            }
        );
    }

    /**
     * @return array
     */
    public function provides()
    {
        return array('Formidable');
    }

}
