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

    protected function setUp(): void
    {
        $this->phpDeclaration = $this->createMock(PhpDeclaration::class);
        $this->dependencyDeclarations = $this->createMock(DependencyDeclarations::class);
        $this->methodDeclarations = $this->createMock(MethodDeclarations::class);
        $this->propertyDeclarations = $this->createMock(PropertyDeclarations::class);
    }

    public function testItCanSetNamespaceDeclaration(): void
    {
        $builder = new Builder($this->phpDeclaration, $this->dependencyDeclarations, $this->methodDeclarations, $this->propertyDeclarations);

        $namespaceDeclaration = $this->createMock(NamespaceDeclaration::class);

        $builder->setNamespaceDeclaration($namespaceDeclaration);
    }

    public function testItCanSetСlassDeclaration(): void
    {
        $builder = new Builder($this->phpDeclaration, $this->dependencyDeclarations, $this->methodDeclarations, $this->propertyDeclarations);

        $classDeclaration = $this->createMock(ClassDeclaration::class);

        $builder->setСlassDeclaration($classDeclaration);
    }

    public function testItCanSetConstructDeclaration(): void
    {
        $builder = new Builder($this->phpDeclaration, $this->dependencyDeclarations, $this->methodDeclarations, $this->propertyDeclarations);

        $constructDeclaration = $this->createMock(ConstructDeclaration::class);

        $builder->setConstructDeclaration($constructDeclaration);
    }

    public function testItCanAddDependencyDeclaration(): void
    {
        $builder = new Builder($this->phpDeclaration, $this->dependencyDeclarations, $this->methodDeclarations, $this->propertyDeclarations);

        $dependencyDeclaration = $this->createMock(DependencyDeclaration::class);

        $builder->addDependencyDeclaration($dependencyDeclaration);
    }

    public function testItCanAddPropertyDeclaration(): void
    {
        $builder = new Builder($this->phpDeclaration, $this->dependencyDeclarations, $this->methodDeclarations, $this->propertyDeclarations);

        $propertyDeclaration = $this->createMock(PropertyDeclaration::class);

        $builder->addPropertyDeclaration($propertyDeclaration);
    }

    public function testItCanAddMethodDeclaration(): void
    {
        $builder = new Builder($this->phpDeclaration, $this->dependencyDeclarations, $this->methodDeclarations, $this->propertyDeclarations);

        $methodDeclaration = $this->createMock(MethodDeclaration::class);
        $invocationDeclaration = $this->createMock(InvocationDeclaration::class);
        $parameterDeclarations = $this->createMock(ParameterDeclarations::class);

        $builder->addMethodDeclaration($methodDeclaration, $invocationDeclaration, $parameterDeclarations);
    }

    public function testItCanWrite(): void
    {
        $builder = new Builder($this->phpDeclaration, $this->dependencyDeclarations, $this->methodDeclarations, $this->propertyDeclarations);

        $text = $this->createMock(Text::class);

        $builder->write($text);
    }
}