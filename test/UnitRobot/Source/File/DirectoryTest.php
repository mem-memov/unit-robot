<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\File;

use MemMemov\UnitRobot\Source\Reflection\Reflections;
use MemMemov\UnitRobot\UnitTest\File\Directory as UnitTestDirectory;
use MemMemov\UnitRobot\Source\Description\Instance\Instancies;
use PHPUnit\Framework\TestCase;

final class DirectoryTest extends TestCase
{
    public function testItCanCreateTests(): void
    {
        $directory = new Directory();

        $unitTestDirectory = $this->createMock(UnitTestDirectory::class);

        $this->filePaths = 'some $this->filePaths value';

        $this->directoryIterators->expects($this->once())
            ->method('createRecursivePhpFileIterator')
            ->willReturn($this->filePaths);

        $this->file = 'some $this->file value';

        $this->files->expects($this->once())
            ->method('createFile')
            ->willReturn($this->file);

        $file->expects($this->once())
            ->method('hasClass');

        $className = 'some $className value';

        $file->expects($this->once())
            ->method('getClassName')
            ->willReturn($className);

        $this->reflection = 'some $this->reflection value';

        $this->reflections->expects($this->once())
            ->method('createReflection')
            ->willReturn($this->reflection);

        $unitTestFile = 'some $unitTestFile value';

        $file->expects($this->once())
            ->method('createUnitTestFile')
            ->willReturn($unitTestFile);

        $sourceText = 'some $sourceText value';

        $file->expects($this->once())
            ->method('getText')
            ->willReturn($sourceText);

        $reflection->expects($this->once())
            ->method('createTests');

        $reflection->expects($this->once())
            ->method('needsDescribing');

        $this->instance = 'some $this->instance value';

        $this->instances->expects($this->once())
            ->method('createInstance')
            ->willReturn($this->instance);

        $reflection->expects($this->once())
            ->method('describe');

        $instance->expects($this->once())
            ->method('getName');

        $instance->expects($this->once())
            ->method('getProperties');

        $instance->expects($this->once())
            ->method('getMethods');

        $instance->expects($this->once())
            ->method('getDependencies');

        $directory->createTests($unitTestDirectory);
    }
}