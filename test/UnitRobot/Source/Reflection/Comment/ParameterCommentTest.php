<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Comment;

use PHPUnit\Framework\TestCase;

final class ParameterCommentTest extends TestCase
{
    public function testItCanHasTypeForArray(): void
    {
        $parameterComment = new ParameterComment();

        $parameterComment->hasTypeForArray();
    }

    public function testItCanGetTypeForArray(): void
    {
        $parameterComment = new ParameterComment();

        $parameterComment->getTypeForArray();
    }
}