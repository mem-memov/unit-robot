<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Comment;

use PHPUnit\Framework\TestCase;

final class ParameterCommentTest extends TestCase
{
    protected $comment;

    protected function setUp(): void
    {
        $this->comment = 'some $this->comment value';
    }

}