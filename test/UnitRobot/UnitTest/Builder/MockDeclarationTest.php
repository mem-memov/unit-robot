<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;
use PHPUnit\Framework\TestCase;

final class MockDeclarationTest extends TestCase
{
    protected $variable;
    protected $type;

    protected function setUp(): void
    {
        $this->variable = 'some $this->variable value';
        $this->type = 'some $this->type value';
    }

    public function testItCanAppend(): void
    {
        $mockDeclaration = new MockDeclaration($this->variable, $this->type);

        $text = $this->createMock(Text::class);

        $mockDeclaration->append($text);
    }
}