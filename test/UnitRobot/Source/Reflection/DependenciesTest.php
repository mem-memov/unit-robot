<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection;

use MemMemov\UnitRobot\Source\File\Text;
use MemMemov\UnitRobot\UnitTest\UnitTest;
use MemMemov\UnitRobot\Source\Description\Instance\InstanceDependencies;
use MemMemov\UnitRobot\Source\Description\Dependency\Dependencies as DescriptionDependencies;
use MemMemov\UnitRobot\Source\Description\Instance\Instancies;
use PHPUnit\Framework\TestCase;

final class DependenciesTest extends TestCase
{
    protected $class;
    protected $descriptionDependencies;
    protected $instancies;

    protected function setUp(): void
    {
        $this->class = $this->createMock(\ReflectionClass::class);
        $this->descriptionDependencies = $this->createMock(DescriptionDependencies::class);
        $this->instancies = $this->createMock(Instancies::class);
    }

    public function testItCanDescribe(): void
    {
        $dependencies = new Dependencies($this->class, $this->descriptionDependencies, $this->instancies);

        $sourceText = $this->createMock(Text::class);

        $dependencies->describe($sourceText);
    }
}