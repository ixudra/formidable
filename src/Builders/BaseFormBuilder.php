<?php namespace Ixudra\Formidable\Builders;


use Ixudra\Formidable\Form;

abstract class BaseFormBuilder {

    protected Form $form;


    public function __construct(Form $form)
    {
        $form->attachInput();
        $form->attachErrors();
        $form->attachOptions();

        $this->form = $form;
    }


    /**
     * @return  string
     */
    abstract public function open();

    /**
     * @return  string
     */
    abstract public function close();

    /**
     * @param   string      $name
     * @return  string
     */
    abstract public function text($name);

    /**
     * @param   string      $name
     * @return  string
     */
    abstract public function password($name);

    /**
     * @param   string      $name
     * @return  string
     */
    abstract public function select($name);

    /**
     * @param   string      $name
     * @param   string      $value
     * @return  string
     */
    abstract public function hidden($name, $value = null);

    /**
     * @param   string      $name
     * @param   string      $label
     * @return  string
     */
    abstract public function label($name, $label);

    /**
     * @return  string
     */
    public function method()
    {
        if( $this->form->getMethod() === 'POST' ) {
            return '';
        }

        return $this->hidden( '_method', $this->form->getMethod() );
    }

    /**
     * @return  string
     */
    public function token()
    {
        return $this->hidden( '_token' );
    }

    /**
     * @return  Form
     */
    public function getForm()
    {
        return $this->form;
    }

}
