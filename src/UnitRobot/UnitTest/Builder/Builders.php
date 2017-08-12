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
        return new Builder(
            $this->phpDeclaration,
            new MethodDeclarations()
        );
    }
}