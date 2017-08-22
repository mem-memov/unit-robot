<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\ReturnType;

use MemMemov\UnitRobot\Source\Description\Type\Type;
use MemMemov\UnitRobot\Source\Description\Type\Types;
use MemMemov\UnitRobot\Source\Reflection\Comment\MethodComment;
use PHPUnit\Framework\TestCase;

final class ReturnTypesTest extends TestCase
{
    protected $types;

    protected function setUp(): void
    {
        $this->types = $this->createMock(Types::class);
    }

    public function testItCanCreateReturnType(): void
    {
        $returnTypes = new ReturnTypes($this->types);

        $type = 'some $type value';
        $methodComment = $this->createMock(MethodComment::class);

        $returnTypes->createReturnType($type, $methodComment);
    }
}