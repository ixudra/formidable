<?php namespace Ixudra\Formidable;


use Ixudra\Formidable\Builders\BaseFormBuilder;
use Ixudra\Formidable\Builders\DefaultFormBuilder;
use Ixudra\Formidable\Exceptions\FormAlreadyExistsException;
use Ixudra\Formidable\Exceptions\FormDoesNotExistException;
use Ixudra\Formidable\Form;
use Illuminate\Support\Arr;

class FormidableService {

    /** @var array $forms */
    protected $forms;


    public function __construct()
    {
        $this->forms = array();
    }


    /**
     * @param   string              $key
     * @param   Form                $form
     * @throws  FormAlreadyExistsException
     */
    public function addForm($key, Form $form)
    {
        if( Arr::has($this->forms, $key) ) {
            throw new FormAlreadyExistsException();
        }

        $this->addFormBuilder( $key, new DefaultFormBuilder( $form ) );
    }

    /**
     * @param   string              $key
     * @param   BaseFormBuilder     $formBuilder
     * @throws  FormAlreadyExistsException
     */
    public function addFormBuilder($key, BaseFormBuilder $formBuilder)
    {
        if( Arr::has($this->forms, $key) ) {
            throw new FormAlreadyExistsException();
        }

        Arr::set( $this->forms, $key, $formBuilder );
    }

    /**
     * @param   string              $key
     *
     * @return  BaseFormBuilder
     * @throws  FormDoesNotExistException
     */
    public function for($key)
    {
        if( !Arr::has($this->forms, $key) ) {
            throw new FormDoesNotExistException();
        }

        return Arr::get( $this->forms, $key );
    }

}