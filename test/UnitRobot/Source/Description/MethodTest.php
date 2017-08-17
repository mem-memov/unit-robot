<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description;

use PHPUnit\Framework\TestCase;

final class MethodTest extends TestCase
{
    protected $name;
    protected $parameters;
    protected $retunValue;

    protected function setUp(): void
    {
        $this->name = $this->createMock(::class);
        $this->parameters = $this->createMock(::class);
        $this->retunValue = $this->createMock(::class);
    }

}