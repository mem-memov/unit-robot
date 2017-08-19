<?php
namespace MemMemov\UnitRobot\Source\Reflection\Comment;

class MethodComment
{
    private const ARRAY_TYPE_PATTERN = '/@return\s+(.+)\[\]/U';
    
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
    
    public function hasReturnItemType(): bool
    {
        preg_match(self::ARRAY_TYPE_PATTERN, $this->comment, $matches);

        return isset($matches[1]);
    }
    
    public function getReturnItemType(): string
    {
        preg_match(self::ARRAY_TYPE_PATTERN, $this->comment, $matches);
        
        return $matches[1];
    }
}