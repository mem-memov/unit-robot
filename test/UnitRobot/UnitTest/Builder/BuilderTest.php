<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;
use PHPUnit\Framework\TestCase;

final class BuilderTest extends TestCase
{
    public function testItCanSetNamespaceDeclaration(): void
    {
        $builder = new Builder();

        $namespaceDeclaration = $this->createMock(NamespaceDeclaration::class);

        $builder->setNamespaceDeclaration($namespaceDeclaration);
    }

    public function testItCanSetСlassDeclaration(): void
    {
        $builder = new Builder();

        $classDeclaration = $this->createMock(ClassDeclaration::class);

        $builder->setСlassDeclaration($classDeclaration);
    }

    public function testItCanSetConstructDeclaration(): void
    {
        $builder = new Builder();

        $constructDeclaration = $this->createMock(ConstructDeclaration::class);

        $this->methodDeclarations->expects($this->once())
            ->method('setConstructDeclaration');

        $builder->setConstructDeclaration($constructDeclaration);
    }

    public function testItCanAddDependencyDeclaration(): void
    {
        $builder = new Builder();

        $dependencyDeclaration = $this->createMock(DependencyDeclaration::class);

        $this->dependencyDeclarations->expects($this->once())
            ->method('addDeclaration');

        $builder->addDependencyDeclaration($dependencyDeclaration);
    }

    public function testItCanAddPropertyDeclaration(): void
    {
        $builder = new Builder();

        $propertyDeclaration = $this->createMock(PropertyDeclaration::class);

        $this->propertyDeclarations->expects($this->once())
            ->method('addDeclaration');

        $builder->addPropertyDeclaration($propertyDeclaration);
    }

    public function testItCanAddMethodDeclaration(): void
    {
        $builder = new Builder();

        $methodDeclaration = $this->createMock(MethodDeclaration::class);
        $invocationDeclaration = $this->createMock(InvocationDeclaration::class);
        $parameterDeclarations = $this->createMock(ParameterDeclarations::class);
        $callDeclarations = $this->createMock(CallDeclarations::class);

        $this->methodDeclarations->expects($this->once())
            ->method('addDeclaration');

        $builder->addMethodDeclaration($methodDeclaration, $invocationDeclaration, $parameterDeclarations, $callDeclarations);
    }

    public function testItCanWrite(): void
    {
        $builder = new Builder();

        $text = $this->createMock(Text::class);

        $this->phpDeclaration->expects($this->once())
            ->method('append');

        $this->namespaceDeclaration->expects($this->once())
            ->method('append');

        $this->dependencyDeclarations->expects($this->once())
            ->method('append');

        $this->classDeclaration->expects($this->once())
            ->method('append');

        $this->propertyDeclarations->expects($this->once())
            ->method('append');

        $this->callDeclarations->expects($this->once())
            ->method('append');

        $this->constructorParameters = 'some $this->constructorParameters value';

        $this->propertyDeclarations->expects($this->once())
            ->method('getParameters')
            ->willReturn($this->constructorParameters);

        $this->methodDeclarations->expects($this->once())
            ->method('append');

        $text->expects($this->once())
            ->method('appendLine');

        $builder->write($text);
    }
}