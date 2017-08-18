<?php
namespace MemMemov\UnitRobot\Source\Reflection\Method;

class MethodComments
{
    public function createMethodComment(
        string $comment
    ): MethodComment
    {
        return new MethodComment($comment);
    }
}