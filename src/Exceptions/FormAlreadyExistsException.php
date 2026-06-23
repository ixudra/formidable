<?php namespace Ixudra\Formidable\Exceptions;


class FormAlreadyExistsException extends \Exception {

    protected $message = 'A form already exists for that key. Please choose a different key.';

}
