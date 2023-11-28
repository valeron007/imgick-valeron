<?php

namespace app;

use exceptions\ExceptionCommandLine;

/**
 *
 */
class CommandLine
{
    /**
     * @var array
     */
    private array $parameters = [];
    /**
     * @var array|string[]
     */
    private array $operations = ['scale', 'rotate', 'filter'];

    /**
     * @param array $parameters
     */
    public function __construct(array $parameters)
    {
        foreach ($parameters as $key => $value) {
            $parameter = json_decode($value, true, depth: 512);
            array_push($this->parameters, $parameter);
        }
    }

    /**
     * @return array
     */
    public function getParameters() {
        return $this->parameters;
    }

    /**
     * @return void
     * @throws ExceptionCommandLine
     */
    public function validate(): void
    {
        $count_parameters = count($this->parameters);

        if($count_parameters === 0) {
            throw new ExceptionCommandLine(" Not found parameters for image ");
        } elseif ($count_parameters > 0) {
            foreach ($this->parameters as $key => $value) {
                if (!$this->searchKeys($value)) {
                    throw new ExceptionCommandLine(" Parameter not exists:" . array_key_first($value));
                }
            }
        }
    }

    /**
     * @param $array_filter
     * @return bool
     */
    private function searchKeys($array_filter): bool
    {
        $key_exist = false;
        foreach ($this->operations as $operation) {
            $key_exist = array_key_exists($operation, $array_filter);
            if ($key_exist) {
                break;
            }
        }
        return $key_exist;
    }

}
