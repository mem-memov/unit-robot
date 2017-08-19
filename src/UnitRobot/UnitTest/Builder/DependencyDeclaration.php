<?php
namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;

class DependencyDeclaration
{
    private $fullClassName;
    private $alias;
    
    public function __construct(
        string $fullClassName,
        string $alias
    ) {
        $this->fullClassName = $fullClassName;
        $this->alias = $alias;
    }
    
    public function append(Text $text) 
    {
        if (empty($this->alias)) {
            $text->appendLine('use ' . $this->fullClassName . ';');
        } else {
            $text->appendLine('use ' . $this->fullClassName . ' as ' . $this->alias . ';');
        }
    }
}