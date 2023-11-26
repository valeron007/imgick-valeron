<?php

namespace exceptions;

class ExceptionCommandLine extends \Exception
{
    public function __construct(string $message = "", int $code = 100, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}