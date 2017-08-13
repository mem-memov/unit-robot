<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;
use PHPUnit\Framework\TestCase;

final class MethodDeclarationTest extends TestCase
{
    protected $methodName;

    protected function setUp(): void
    {
        $this->methodName = 'some methodName value';
    }

    public function testItCanAppend(): void
    {
    }
}