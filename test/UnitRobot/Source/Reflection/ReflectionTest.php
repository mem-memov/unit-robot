<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\UnitTest\File\File as UnitTestFile;
use MemMemov\UnitRobot\UnitTest\UnitTests;
use PHPUnit\Framework\TestCase;

final class ReflectionTest extends TestCase
{
    protected $class;
    protected $methods;
    protected $unitTests;

    protected function setUp(): void
    {
    }

    public function testItCanCreateTests(): void
    {
    }
}