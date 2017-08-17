<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest;

use MemMemov\UnitRobot\UnitTest\Builder\Declarations;
use MemMemov\UnitRobot\UnitTest\Builder\Builder;
use MemMemov\UnitRobot\UnitTest\File\File;
use MemMemov\UnitRobot\UnitTest\File\Text;
use PHPUnit\Framework\TestCase;

final class UnitTestTest extends TestCase
{
    protected $declarations;
    protected $builder;
    protected $text;
    protected $file;

    protected function setUp(): void
    {
        $this->declarations = $this->createMock(Declarations::class);
        $this->builder = $this->createMock(Builder::class);
        $this->text = $this->createMock(Text::class);
        $this->file = $this->createMock(File::class);
    }

    public function testItCanSetNamespace(): void
    {
        $unitTest = new UnitTest($this->declarations, $this->builder, $this->text, $this->file);

        $sourceClassNamespace = 'some $sourceClassNamespace value';

        $this->namespaceDeclaration = 'some $this->namespaceDeclaration value';

        $this->declarations->expects($this->once())
            ->method('createNamespaceDeclaration')
            ->willReturn($this->namespaceDeclaration);

        $this->builder->expects($this->once())
            ->method('setNamespaceDeclaration');

        $unitTest->setNamespace($sourceClassNamespace);
    }

    public function testItCanSetClassName(): void
    {
        $unitTest = new UnitTest($this->declarations, $this->builder, $this->text, $this->file);

        $sourceClassName = 'some $sourceClassName value';

        $this->classDeclaration = 'some $this->classDeclaration value';

        $this->declarations->expects($this->once())
            ->method('createClassDeclaration')
            ->willReturn($this->classDeclaration);

        $this->constructDeclaration = 'some $this->constructDeclaration value';

        $this->declarations->expects($this->once())
            ->method('createConstructDeclaration')
            ->willReturn($this->constructDeclaration);

        $this->builder->expects($this->once())
            ->method('setConstructDeclaration');

        $unitTest->setClassName($sourceClassName);
    }

    public function testItCanAddDependency(): void
    {
        $unitTest = new UnitTest($this->declarations, $this->builder, $this->text, $this->file);

        $sourceUseStatement = 'some $sourceUseStatement value';

        $this->dependencyDeclaration = 'some $this->dependencyDeclaration value';

        $this->declarations->expects($this->once())
            ->method('createDependencyDeclaration')
            ->willReturn($this->dependencyDeclaration);

        $this->builder->expects($this->once())
            ->method('addDependencyDeclaration');

        $unitTest->addDependency($sourceUseStatement);
    }

    public function testItCanAddProperty(): void
    {
        $unitTest = new UnitTest($this->declarations, $this->builder, $this->text, $this->file);

        $sourceType = 'some $sourceType value';
        $sourceName = 'some $sourceName value';

        $this->propertyDeclaration = 'some $this->propertyDeclaration value';

        $this->declarations->expects($this->once())
            ->method('createPropertyDeclaration')
            ->willReturn($this->propertyDeclaration);

        $this->builder->expects($this->once())
            ->method('addPropertyDeclaration');

        $unitTest->addProperty($sourceType, $sourceName);
    }

    public function testItCanAddMethod(): void
    {
        $unitTest = new UnitTest($this->declarations, $this->builder, $this->text, $this->file);

        $sourceMethodName = 'some $sourceMethodName value';
        $sourceClassName = 'some $sourceClassName value';
        $sourceMethodParameters = $this->createMock(MethodParameters::class);
        $sourceMethodCalls = $this->createMock(MethodCalls::class);

        $this->methodDeclaration = 'some $this->methodDeclaration value';

        $this->declarations->expects($this->once())
            ->method('createMethodDeclaration')
            ->willReturn($this->methodDeclaration);

        $this->parameterDeclarations = 'some $this->parameterDeclarations value';

        $this->declarations->expects($this->once())
            ->method('createParameterDeclarations')
            ->willReturn($this->parameterDeclarations);

        $sourceMethodParameters->expects($this->once())
            ->method('fillUnitTestMethod');

        $this->invocationDeclaration = 'some $this->invocationDeclaration value';

        $this->declarations->expects($this->once())
            ->method('createInvocationDeclaration')
            ->willReturn($this->invocationDeclaration);

        $parameterDeclarations->expects($this->once())
            ->method('getParameters');

        $this->callDeclarations = 'some $this->callDeclarations value';

        $this->declarations->expects($this->once())
            ->method('createCallDeclarations')
            ->willReturn($this->callDeclarations);

        $sourceMethodCalls->expects($this->once())
            ->method('fillUnitTestMethod');

        $this->builder->expects($this->once())
            ->method('addMethodDeclaration');

        $unitTest->addMethod($sourceMethodName, $sourceClassName, $sourceMethodParameters, $sourceMethodCalls);
    }

    public function testItCanWrite(): void
    {
        $unitTest = new UnitTest($this->declarations, $this->builder, $this->text, $this->file);

        $this->builder->expects($this->once())
            ->method('write');

        $this->text->expects($this->once())
            ->method('writeToFile');

        $unitTest->write();
    }
}