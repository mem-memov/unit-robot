<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method\Parameter;

class ParameterComment
{
    private const ARRAY_TYPE_PATTERN = '/@param\s+(.+)\[\]/U';
    
    private $comment;

    public function __construct(
        string $comment
    ) {
        $this->comment = $comment;
    }

    public function hasTypeForArray(): bool
    {
        preg_match(self::ARRAY_TYPE_PATTERN, $this->comment, $matches);

        return isset($matches[1]);
    }
    
    public function getTypeForArray(): string
    {
        preg_match(self::ARRAY_TYPE_PATTERN, $this->comment, $matches);
        
        return $matches[1];
    }
}