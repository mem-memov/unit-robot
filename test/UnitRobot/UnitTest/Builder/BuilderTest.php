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
        $builder = new Builder();
    }

    public function testItCanSetСlassDeclaration(): void
    {
        $builder = new Builder();
    }

    public function testItCanSetConstructDeclaration(): void
    {
        $builder = new Builder();
    }

    public function testItCanAddDependencyDeclaration(): void
    {
        $builder = new Builder();
    }

    public function testItCanAddPropertyDeclaration(): void
    {
        $builder = new Builder();
    }

    public function testItCanAddMethodDeclaration(): void
    {
        $builder = new Builder();
    }

    public function testItCanWrite(): void
    {
        $builder = new Builder();
    }
}