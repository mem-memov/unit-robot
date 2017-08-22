<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Description\Parameter;

use MemMemov\UnitRobot\Source\Description\Type\Collection\MixedArrayType;
use MemMemov\UnitRobot\UnitTest\Builder\Declarations as UnitTestDeclarations;
use MemMemov\UnitRobot\UnitTest\Builder\ParameterDeclarations as UnitTestParameterDeclarations;
use PHPUnit\Framework\TestCase;

final class ArrayParameterTest extends TestCase
{
    protected $name;
    protected $type;

    protected function setUp(): void
    {
        $this->name = 'some $this->name value';
        $this->type = $this->createMock(MixedArrayType::class);
    }

    public function testItCanFillUnitTestMethod(): void
    {
        $arrayParameter = new ArrayParameter($this->name, $this->type);

        $declarations = $this->createMock(UnitTestDeclarations::class);
        $parameterDeclarations = $this->createMock(UnitTestParameterDeclarations::class);

        $arrayParameter->fillUnitTestMethod($declarations, $parameterDeclarations);
    }
}