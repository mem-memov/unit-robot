<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;
use PHPUnit\Framework\TestCase;

final class DependencyDeclarationTest extends TestCase
{
    protected $useStatement;

    protected function setUp(): void
    {
        $this->useStatement = $this->createMock(string::class);
    }

    public function testItCanAppend(): void
    {
    }
}