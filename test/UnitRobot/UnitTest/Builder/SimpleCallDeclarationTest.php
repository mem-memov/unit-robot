<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;
use PHPUnit\Framework\TestCase;

final class SimpleCallDeclarationTest extends TestCase
{
    protected $variable;
    protected $method;

    protected function setUp(): void
    {
        $this->variable = 'some $this->variable value';
        $this->method = 'some $this->method value';
    }

    public function testItCanAppendExpectation(): void
    {
        $simpleCallDeclaration = new SimpleCallDeclaration($this->variable, $this->method);

        $text = $this->createMock(Text::class);

        $simpleCallDeclaration->appendExpectation($text);
    }
}