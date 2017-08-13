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
    }

    public function testItCanSetСlassDeclaration(): void
    {
    }

    public function testItCanAddDependencyDeclaration(): void
    {
    }

    public function testItCanAddPropertyDeclaration(): void
    {
    }

    public function testItCanAddMethodDeclaration(): void
    {
    }

    public function testItCanWrite(): void
    {
    }
}