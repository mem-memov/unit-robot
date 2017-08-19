<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method;

use PHPUnit\Framework\TestCase;

final class NoTypeTest extends TestCase
{
    protected $method;

    protected function setUp(): void
    {
        $this->method = 'some $this->method value';
    }

}