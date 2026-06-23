<?php namespace Ixudra\Formidable\Exceptions;


class FormDoesNotExistException extends \Exception {

    protected $message = 'No form exists for the key you have provided. Please add the associated form or check the key for typos';

}
