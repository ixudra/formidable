<?php namespace Ixudra\Formidable\Facades;


use Illuminate\Support\Facades\Facade;

class Formidable extends Facade {

    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Formidable';
    }

}
