<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method;

use PHPUnit\Framework\TestCase;

final class MethodCommentsTest extends TestCase
{
    public function testItCanCreateMethodComment(): void
    {
        $methodComments = new MethodComments();

        $comment = 'some $comment value';

        $methodComments->createMethodComment($comment);
    }
}