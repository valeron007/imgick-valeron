<?php

namespace app;

use exceptions\ExceptionCommandLine;

class CommandLine
{
    private array $commandLine = [];
    public function __construct(array $ragv)
    {
        $this->commandLine =$ragv;
    }

    public function validate()
    {
        if(count($this->commandLine) === 1) {
            throw new ExceptionCommandLine(" Not found parameters for image ");
        }
    }

}