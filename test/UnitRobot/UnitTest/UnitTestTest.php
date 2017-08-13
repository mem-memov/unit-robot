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

        $unitTest->setNamespace($sourceClassNamespace);
    }

    public function testItCanSetClassName(): void
    {
        $unitTest = new UnitTest($this->declarations, $this->builder, $this->text, $this->file);

        $sourceClassName = 'some $sourceClassName value';

        $unitTest->setClassName($sourceClassName);
    }

    public function testItCanAddDependency(): void
    {
        $unitTest = new UnitTest($this->declarations, $this->builder, $this->text, $this->file);

        $sourceUseStatement = 'some $sourceUseStatement value';

        $unitTest->addDependency($sourceUseStatement);
    }

    public function testItCanAddProperty(): void
    {
        $unitTest = new UnitTest($this->declarations, $this->builder, $this->text, $this->file);

        $sourceType = 'some $sourceType value';
        $sourceName = 'some $sourceName value';

        $unitTest->addProperty($sourceType, $sourceName);
    }

    public function testItCanAddMethod(): void
    {
        $unitTest = new UnitTest($this->declarations, $this->builder, $this->text, $this->file);

        $sourceMethodName = 'some $sourceMethodName value';
        $sourceClassName = 'some $sourceClassName value';
        $sourceMethodParameters = $this->createMock(MethodParameters::class);

        $unitTest->addMethod($sourceMethodName, $sourceClassName, $sourceMethodParameters);
    }

    public function testItCanWrite(): void
    {
        $unitTest = new UnitTest($this->declarations, $this->builder, $this->text, $this->file);


        $unitTest->write();
    }
}