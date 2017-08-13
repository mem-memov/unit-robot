<?php
namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;

class MockDeclaration
{
    private $variable;
    private $type;
    
    public function __construct(
        string $variable,
        string $type
    ) {
        $this->variable = $variable;
        $this->type = $type;
    }
    
    public function append(Text $text): void
    {
        if ('string' === $this->type) {
           $text->appendLine($this->variable . ' = \'some ' . $this->variable . ' value\';', 2);
        } elseif ('int' === $this->type) {
           $text->appendLine($this->variable . ' = 5;', 2);
        } elseif ('bool' === $this->type) {
           $text->appendLine($this->variable . ' = true;', 2);
        } elseif ('array' === $this->type) {
            $text->appendLine($this->variable . ' = [];', 2);
        } else {
            $text->appendLine($this->variable . ' = $this->createMock(' . $this->type . '::class);', 2);
        }   
    }
}