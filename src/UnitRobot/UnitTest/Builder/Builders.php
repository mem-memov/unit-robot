<?php
namespace MemMemov\UnitRobot\UnitTest\Builder;

class Builders
{
    private $phpDeclaration;
    
    public function __construct(
        PhpDeclaration $phpDeclaration
    ) {
        $this->phpDeclaration = $phpDeclaration;
    }
    
    public function createBuilder(): Builder
    {
        $propertyDeclarations = new PropertyDeclarations();
        
        return new Builder(
            $this->phpDeclaration,
            new DependencyDeclarations(),
            new MethodDeclarations($propertyDeclarations),
            $propertyDeclarations
        );
    }
}