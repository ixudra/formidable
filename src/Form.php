<?php namespace Ixudra\Formidable;


use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\MessageBag;
use Illuminate\Support\ViewErrorBag;

abstract class Form {

    protected $id = '';

    protected $method = 'POST';

    protected $route = '';

    protected $routeParameters = array();

    protected $allowFiles = false;

    protected $input = array();

    protected $options = array();

    protected $rules = array();

    protected $requiredFields = array();

    protected $errors = null;


    public function __construct()
    {
        $this->errors = new MessageBag();
    }

    public function build()
    {
        $this->input = array_merge(
            $this->buildInput(),
            Session::getOldInput()
        );
        $this->options = $this->buildOptions();
        $this->rules = $this->buildRules();
    }

    public function buildInput()
    {
        return array();
    }

    public function buildOptions()
    {
        return array();
    }

    public function buildRules()
    {
        return array();
    }

    public function buildErrors()
    {
        if( !Session::has('errors') ) {
            return new ViewErrorBag();
        }

        return Session::get('errors')->getBag('default');
    }

    public function attachInput()
    {
        $this->input = array_merge(
            $this->buildInput(),
            Session::getOldInput()
        );
    }

    public function attachOptions()
    {
        $this->options = $this->buildOptions();
    }

    public function attachRules()
    {
        $this->rules = $this->buildRules();
    }

    public function attachErrors()
    {
        $this->errors = $this->buildErrors();
    }


    public function getRules()
    {
        return array();
    }

    public function getRequiredFields()
    {
        return array();
    }

    public function getMessages()
    {
        return array();
    }

    public function getInput()
    {
        return array();
    }

    public function getValue($key)
    {
        if( $key === null ) {
            return null;
        }

        return Arr::get( $this->input, $key, null );
    }

    public function isRequired($key)
    {
        if( $key === null ) {
            return null;
        }

        return in_array( $key, $this->requiredFields );
    }

    public function getId()
    {
        return $this->id;
    }

    public function getRoute()
    {
        return $this->route;
    }

    public function getRouteParameters()
    {
        return $this->routeParameters;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function getOptions($key = null)
    {
        if( $key === null ) {
            return $this->options;
        }

        return Arr::get( $this->options, $key, array() );
    }

    public function getErrors($key = null)
    {
        if( $key === null ) {
            return $this->errors;
        }

        if( !$this->hasErrors( $key ) ) {
            return array();
        }

        return $this->errors->get( $key );
    }

    public function hasErrors($key = null)
    {
        if( $key === null ) {
            return false;
        }

        return $this->errors->has( $key );
    }

}
