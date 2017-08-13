<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;
use PHPUnit\Framework\TestCase;

final class MethodDeclarationsTest extends TestCase
{
    protected $propertyDeclarations;

    protected function setUp(): void
    {
        $this->propertyDeclarations = $this->createMock(PropertyDeclarations::class);
    }

    public function testItCanAddDeclaration(): void
    {
        $methodDeclarations = new MethodDeclarations($this->propertyDeclarations);

        $methodDeclarations->addDeclaration($methodDeclaration, $invocationDeclaration);
    }

    public function testItCanSetConstructDeclaration(): void
    {
        $methodDeclarations = new MethodDeclarations($this->propertyDeclarations);

        $methodDeclarations->setConstructDeclaration($constructDeclaration);
    }

    public function testItCanAppend(): void
    {
        $methodDeclarations = new MethodDeclarations($this->propertyDeclarations);

        $methodDeclarations->append($text);
    }
}