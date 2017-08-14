<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection;

use PHPUnit\Framework\TestCase;

final class CallsTest extends TestCase
{
    public function testItCanCreateMethodCalls(): void
    {
        $calls = new Calls();

        $methodString = 'some $methodString value';

        $calls->createMethodCalls($methodString);
    }
}