<?php
namespace MemMemov\UnitRobot\Source\Reflection\Comment;

class MethodComments
{
    public function createMethodComment(
        string $comment
    ): MethodComment
    {
        return new MethodComment($comment);
    }
}