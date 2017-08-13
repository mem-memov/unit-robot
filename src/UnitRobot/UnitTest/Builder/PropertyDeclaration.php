<?php
namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;

class PropertyDeclaration
{
    private $type;
    private $name;
    
    public function __construct(
        string $type,
        string $name
    ) {
        $this->type = $type;
        $this->name = $name;
    }
    
    public function appendProperty(Text $text): void
    {
        $text->appendLine('protected $' . $this->name . ';', 1);
    }
    
   public function appendValue(Text $text): void
   {
        if ('string' === $this->type) {
           $text->appendLine('$this->' . $this->name . ' = \'some ' . $this->name . ' value\';', 2);
        } elseif ('int' === $this->type) {
           $text->appendLine('$this->' . $this->name . ' = 5;', 2);
        } elseif ('bool' === $this->type) {
           $text->appendLine('$this->' . $this->name . ' = true;', 2);
        } elseif ('array' === $this->type) {
            $text->appendLine('$this->' . $this->name . ' = [];', 2);
        } else {
            $text->appendLine('$this->' . $this->name . ' = $this->createMock(' . $this->type . '::class);', 2);
        }   
    }
    
    public function getParameter(): string
    {
        return '$this->' . $this->name;
    }
}