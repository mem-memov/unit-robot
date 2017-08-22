<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Method\Call\Variable;

use PHPUnit\Framework\TestCase;

final class VariablesTest extends TestCase
{
    public function testItCanCreatePropertyVariable(): void
    {
        $variables = new Variables();

        $variableName = 'some $variableName value';

        $variables->createPropertyVariable($variableName);
    }

    public function testItCanCreateParameterVariable(): void
    {
        $variables = new Variables();

        $variableName = 'some $variableName value';

        $variables->createParameterVariable($variableName);
    }
}