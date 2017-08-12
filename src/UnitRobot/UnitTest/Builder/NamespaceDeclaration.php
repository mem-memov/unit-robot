<?php
namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;

class NamespaceDeclaration
{
    private $namespaceName;
    
    public function __construct(
        string $namespaceName
    ) {
        $this->namespaceName = $namespaceName;
    }
    
    public function append(Text $text) 
    {
        $text->appendLine('namespace ' . $this->namespaceName . ';');
        $text->appendLine('');
    }
}