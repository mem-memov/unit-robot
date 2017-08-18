<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Parameter;

use PHPUnit\Framework\TestCase;

final class ParameterCommentTest extends TestCase
{
    protected $comment;
    protected $k;

    protected function setUp(): void
    {
        $this->comment = 'some $this->comment value';
        $this->k = [];
    }

    public function testItCanHasTypeForArray(): void
    {
        $parameterComment = new ParameterComment($this->comment, $this->k);

        $parameterComment->hasTypeForArray();
    }

    public function testItCanGetTypeForArray(): void
    {
        $parameterComment = new ParameterComment($this->comment, $this->k);

        $parameterComment->getTypeForArray();
    }
}