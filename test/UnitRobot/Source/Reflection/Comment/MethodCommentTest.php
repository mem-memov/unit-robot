<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Comment;

use PHPUnit\Framework\TestCase;

final class MethodCommentTest extends TestCase
{
    public function testItCanGetParameterComment(): void
    {
        $methodComment = new MethodComment();

        $parameter = 'some $parameter value';

        $methodComment->getParameterComment($parameter);
    }
}