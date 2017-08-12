<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use PHPUnit\Framework\TestCase;

final class MethodTest extends TestCase
{
    protected $reflection;
    protected $methodSignature;
    protected $methodBody;
    protected $parameters;

    protected function setUp(): void
    {
    }

    public function testItCanCreateTests(): void
    {
    }
}