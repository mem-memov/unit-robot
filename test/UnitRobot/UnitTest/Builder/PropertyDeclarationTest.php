<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;
use PHPUnit\Framework\TestCase;

final class PropertyDeclarationTest extends TestCase
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

    public function testItCanAppendProperty(): void
    {
        $propertyDeclaration = new PropertyDeclaration($this->type, $this->name, $this->mockDeclaration);

        $text = $this->createMock(Text::class);

        $propertyDeclaration->appendProperty($text);
    }

    public function testItCanAppendValue(): void
    {
        $propertyDeclaration = new PropertyDeclaration($this->type, $this->name, $this->mockDeclaration);

        $text = $this->createMock(Text::class);

        $propertyDeclaration->appendValue($text);
    }

    public function testItCanGetParameter(): void
    {
        $propertyDeclaration = new PropertyDeclaration($this->type, $this->name, $this->mockDeclaration);

        $propertyDeclaration->getParameter();
    }
}