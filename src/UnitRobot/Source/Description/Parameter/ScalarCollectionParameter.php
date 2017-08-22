<?php
namespace MemMemov\UnitRobot\Source\Description\Parameter;

use MemMemov\UnitRobot\Source\Description\Type\Collection\ScalarArrayType;
use MemMemov\UnitRobot\UnitTest\Builder\Declarations as UnitTestDeclarations;
use MemMemov\UnitRobot\UnitTest\Builder\ParameterDeclarations as UnitTestParameterDeclarations;

class ScalarCollectionParameter implements Parameter
{
    private $name;
    private $type;
    
    public function __construct(
        string $name,
        ScalarArrayType $type
    ) {
        $this->name = $name;
        $this->type = $type;
    }
    
    public function fillUnitTestMethod(
        UnitTestDeclarations $declarations,
        UnitTestParameterDeclarations $parameterDeclarations
    ): void
    {
        $parameterDeclaration = $declarations->createParameterDeclaration(
            $this->type->getForSignature(),
            $this->name
        );
        
        $parameterDeclarations->addDeclaration($parameterDeclaration);
    }
}