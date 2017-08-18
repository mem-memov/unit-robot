<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description;

use PHPUnit\Framework\TestCase;

final class MethodsTest extends TestCase
{
    public function testItCanCreateMethod(): void
    {
        $methods = new Methods();

        $methods->createMethod();
    }
}