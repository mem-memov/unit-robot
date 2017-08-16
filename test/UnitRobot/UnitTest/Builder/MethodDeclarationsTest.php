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

        $methodDeclaration = $this->createMock(MethodDeclaration::class);
        $invocationDeclaration = $this->createMock(InvocationDeclaration::class);
        $parameterDeclarations = $this->createMock(ParameterDeclarations::class);
        $callDeclarations = $this->createMock(CallDeclarations::class);

        $methodDeclarations->addDeclaration($methodDeclaration, $invocationDeclaration, $parameterDeclarations, $callDeclarations);
    }

    public function testItCanSetConstructDeclaration(): void
    {
        $methodDeclarations = new MethodDeclarations($this->propertyDeclarations);

        $constructDeclaration = $this->createMock(ConstructDeclaration::class);

        $methodDeclarations->setConstructDeclaration($constructDeclaration);
    }

    public function testItCanAppend(): void
    {
        $methodDeclarations = new MethodDeclarations($this->propertyDeclarations);

        $text = $this->createMock(Text::class);

        $this->propertyDeclarations->expects($this->once())
            ->method('getParameters')
            ->willReturn($this->constructorParameters);

        $this->constructDeclaration->expects($this->once())
            ->method('setParameters');

        $text->expects($this->once())
            ->method('appendLine');

        $methodDeclaration->expects($this->once())
            ->method('append');

        $this->constructDeclaration->expects($this->once())
            ->method('append');

        $text->expects($this->once())
            ->method('appendLine');

        $parameterDeclarations->expects($this->once())
            ->method('append');

        $callDeclarations->expects($this->once())
            ->method('append');

        $invocationDeclaration->expects($this->once())
            ->method('append');

        $text->expects($this->once())
            ->method('appendLine');

        $methodDeclarations->append($text);
    }
}