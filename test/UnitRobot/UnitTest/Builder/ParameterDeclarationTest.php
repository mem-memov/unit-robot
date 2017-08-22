<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;
use PHPUnit\Framework\TestCase;

final class ParameterDeclarationTest extends TestCase
{
    protected $type;
    protected $name;
    protected $mockDeclaration;

    protected function setUp(): void
    {
        $this->type = 'some $this->type value';
        $this->name = 'some $this->name value';
        $this->mockDeclaration = $this->createMock(MockDeclaration::class);
    }

    public function testItCanGetParameter(): void
    {
        $parameterDeclaration = new ParameterDeclaration($this->type, $this->name, $this->mockDeclaration);

        $parameterDeclaration->getParameter();
    }

    public function testItCanAppendValue(): void
    {
        $parameterDeclaration = new ParameterDeclaration($this->type, $this->name, $this->mockDeclaration);

        $text = $this->createMock(Text::class);

        $parameterDeclaration->appendValue($text);
    }
}