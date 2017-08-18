<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method;

use PHPUnit\Framework\TestCase;

final class MethodCommentTest extends TestCase
{
    protected $comment;

    protected function setUp(): void
    {
        $this->comment = 'some $this->comment value';
    }

    public function testItCanGetParameterComment(): void
    {
        $methodComment = new MethodComment($this->comment);

        $parameter = 'some $parameter value';

        $methodComment->getParameterComment($parameter);
    }
}