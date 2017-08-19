<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\Source\Reflection\Parameter;

use PHPUnit\Framework\TestCase;

final class NoTypeTest extends TestCase
{
    protected $parameterName;

    protected function setUp(): void
    {
        $this->parameterName = 'some $this->parameterName value';
    }

}