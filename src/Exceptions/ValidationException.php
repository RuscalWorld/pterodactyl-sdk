<?php

namespace HCGCloud\Pterodactyl\Exceptions;

use Exception;

class ValidationException extends Exception
{
    /**
     * The array of errors.
     *
     * @var array
     */
    public $errors;

    /**
     * Create a new exception instance.
     *
     * @return void
     */
    public function __construct(array $errors)
    {
        parent::__construct(json_encode($errors));

        $this->errors = $errors;
    }

    /**
     * The array of errors.
     *
     * @return array
     */
    public function errors()
    {
        return $this->errors;
    }
}
