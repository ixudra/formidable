<?php namespace Ixudra\Formidable\Builders;


use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class DefaultFormBuilder extends BaseFormBuilder {

    /**
     * {@inheritDoc}
     */
    public function open()
    {
        return '<form method="POST" action="'. URL::route($this->form->getRoute(), $this->form->getRouteParameters()) .'" accept-charset="UTF-8" id="'. $this->form->getId() .'" role="form">'
            . $this->method();
    }

    /**
     * {@inheritDoc}
     */
    public function close()
    {
        return '</form>';
    }

    /**
     * {@inheritDoc}
     */
    public function text($name)
    {
        return '<input name="'. $name .'" type="text" value="'. $this->form->getValue( $name ) .'" id="'. $name .'">';
    }

    /**
     * {@inheritDoc}
     */
    public function password($name)
    {
        return '<input name="'. $name .'" type="password" id="'. $name .'">';
    }

    /**
     * {@inheritDoc}
     */
    public function select($name)
    {
        $field = '<select name="'. $name .'" id="'. $name .'">' . PHP_EOL;

        foreach( $this->form->getOptions( $name ) as $key => $option ) {
            $field .= '<option value="'. $key .'">'. $option .'</option>' . PHP_EOL;
        }
        $field .= '</select>' . PHP_EOL;

        return $field;
    }

    /**
     * {@inheritDoc}
     */
    public function hidden($name, $value = null)
    {
        if( $name !== '_method' ) {
            $value = $this->form->getValue( $name );
        }

        if( $name === '_token' ) {
            $value = Session::token();
        }

        return '<input type="hidden" name="'. $name .'" value="'. $value .'" id="'. $name .'">';
    }

    /**
     * {@inheritDoc}
     */
    public function label($name, $label)
    {
        return '<label for="'. $name .'">'. $label .'</label>';
    }

}
