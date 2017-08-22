<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method;

use PHPUnit\Framework\TestCase;

final class NoTypeTest extends TestCase
{
    protected $method;
    protected $declaringClass;

    protected function setUp(): void
    {
        $this->method = 'some $this->method value';
        $this->declaringClass = $this->createMock(\ReflectionClass::class);
    }

}