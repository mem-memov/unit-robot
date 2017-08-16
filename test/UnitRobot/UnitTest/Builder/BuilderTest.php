<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;
use PHPUnit\Framework\TestCase;

final class BuilderTest extends TestCase
{
    protected $phpDeclaration;
    protected $dependencyDeclarations;
    protected $methodDeclarations;
    protected $propertyDeclarations;
    protected $callDeclarations;

    protected function setUp(): void
    {
        $this->phpDeclaration = $this->createMock(PhpDeclaration::class);
        $this->dependencyDeclarations = $this->createMock(DependencyDeclarations::class);
        $this->methodDeclarations = $this->createMock(MethodDeclarations::class);
        $this->propertyDeclarations = $this->createMock(PropertyDeclarations::class);
        $this->callDeclarations = $this->createMock(CallDeclarations::class);
    }

    public function testItCanSetNamespaceDeclaration(): void
    {
        $builder = new Builder($this->phpDeclaration, $this->dependencyDeclarations, $this->methodDeclarations, $this->propertyDeclarations, $this->callDeclarations);

        $namespaceDeclaration = $this->createMock(NamespaceDeclaration::class);

        $builder->setNamespaceDeclaration($namespaceDeclaration);
    }

    public function testItCanSetСlassDeclaration(): void
    {
        $builder = new Builder($this->phpDeclaration, $this->dependencyDeclarations, $this->methodDeclarations, $this->propertyDeclarations, $this->callDeclarations);

        $classDeclaration = $this->createMock(ClassDeclaration::class);

        $builder->setСlassDeclaration($classDeclaration);
    }

    public function testItCanSetConstructDeclaration(): void
    {
        $builder = new Builder($this->phpDeclaration, $this->dependencyDeclarations, $this->methodDeclarations, $this->propertyDeclarations, $this->callDeclarations);

        $constructDeclaration = $this->createMock(ConstructDeclaration::class);

        $this->methodDeclarations->expects($this->once())
            ->method('setConstructDeclaration');

        $builder->setConstructDeclaration($constructDeclaration);
    }

    public function testItCanAddDependencyDeclaration(): void
    {
        $builder = new Builder($this->phpDeclaration, $this->dependencyDeclarations, $this->methodDeclarations, $this->propertyDeclarations, $this->callDeclarations);

        $dependencyDeclaration = $this->createMock(DependencyDeclaration::class);

        $this->dependencyDeclarations->expects($this->once())
            ->method('addDeclaration');

        $builder->addDependencyDeclaration($dependencyDeclaration);
    }

    public function testItCanAddPropertyDeclaration(): void
    {
        $builder = new Builder($this->phpDeclaration, $this->dependencyDeclarations, $this->methodDeclarations, $this->propertyDeclarations, $this->callDeclarations);

        $propertyDeclaration = $this->createMock(PropertyDeclaration::class);

        $this->propertyDeclarations->expects($this->once())
            ->method('addDeclaration');

        $builder->addPropertyDeclaration($propertyDeclaration);
    }

    public function testItCanAddMethodDeclaration(): void
    {
        $builder = new Builder($this->phpDeclaration, $this->dependencyDeclarations, $this->methodDeclarations, $this->propertyDeclarations, $this->callDeclarations);

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
        $builder = new Builder($this->phpDeclaration, $this->dependencyDeclarations, $this->methodDeclarations, $this->propertyDeclarations, $this->callDeclarations);

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

        $this->methodDeclarations->expects($this->once())
            ->method('append');

        $text->expects($this->once())
            ->method('appendLine');

        $builder->write($text);
    }
}