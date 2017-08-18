<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method;

class MethodComment
{
    private $comment;
    
    public function __construct(
        string $comment
    ) {
        $this->comment = $comment;
    }

    public function getParameterComment(string $parameter): string
    {
        preg_match('/@param\s(.+)\$' . $parameter . '/mU', $this->comment, $matches);
        
        return empty($matches)
            ? ''
            : $matches[0];
    }
}