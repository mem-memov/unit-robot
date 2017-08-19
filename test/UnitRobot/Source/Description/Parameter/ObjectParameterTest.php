<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Parameter;

use MemMemov\UnitRobot\Source\Description\Type\ObjectType;
use PHPUnit\Framework\TestCase;

final class ObjectParameterTest extends TestCase
{
    protected $name;
    protected $type;

    protected function setUp(): void
    {
        $this->name = 'some $this->name value';
        $this->type = $this->createMock(ObjectType::class);
    }

}