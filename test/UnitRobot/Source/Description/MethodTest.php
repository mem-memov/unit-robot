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
        $this->name = 'some $this->name value';
        $this->parameters = $this->createMock(MethodParameters::class);
        $this->retunValue = $this->createMock(Variable::class);
    }

}