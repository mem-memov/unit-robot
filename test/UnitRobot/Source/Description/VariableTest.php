<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description;

use PHPUnit\Framework\TestCase;

final class VariableTest extends TestCase
{
    protected $name;
    protected $type;

    protected function setUp(): void
    {
        $this->name = $this->createMock(::class);
        $this->type = $this->createMock(::class);
    }

}