<?php
namespace MemMemov\UnitRobot\Source\Description\Signature;

use MemMemov\UnitRobot\Source\Description\Parameter\Parameter;

class SignatureParameters
{
    private $parameters;
    
    public function __construct() 
    {
        $this->parameters = [];
    }
    
    public function addParameter(Parameter $parameter): void
    {
        $this->parameters[] = $parameter;
    }
}