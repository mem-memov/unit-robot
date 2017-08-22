<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;
use PHPUnit\Framework\TestCase;

final class DependencyDeclarationTest extends TestCase
{
    protected $fullClassName;
    protected $alias;

    protected function setUp(): void
    {
        $this->fullClassName = 'some $this->fullClassName value';
        $this->alias = 'some $this->alias value';
    }

}