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
        $this->methodName = 'some $this->methodName value';
    }

    public function testItCanAppend(): void
    {
        $methodDeclaration = new MethodDeclaration($this->methodName);

        $text = $this->createMock(Text::class);

        $methodDeclaration->append($text);
    }
}