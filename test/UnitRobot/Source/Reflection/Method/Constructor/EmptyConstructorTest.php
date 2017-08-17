<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Constructor;

use MemMemov\UnitRobot\Source\Reflection\Method\Parameter\Parameters;
use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use PHPUnit\Framework\TestCase;

final class EmptyConstructorTest extends TestCase
{
    public function testItCanCreateTest(): void
    {
        $emptyConstructor = new EmptyConstructor();

        $text = $this->createMock(Text::class);
        $unitTest = $this->createMock(UnitTest::class);

        $emptyConstructor->createTest($text, $unitTest);
    }
}