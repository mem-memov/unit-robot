<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest;

use MemMemov\UnitRobot\UnitTest\Builder\Declarations;
use MemMemov\UnitRobot\UnitTest\Builder\Builders;
use MemMemov\UnitRobot\UnitTest\File\File;
use MemMemov\UnitRobot\UnitTest\File\Texts;
use PHPUnit\Framework\TestCase;

final class UnitTestsTest extends TestCase
{
    protected $declarations;
    protected $builders;
    protected $texts;

    protected function setUp(): void
    {
        $this->declarations = $this->createMock(Declarations::class);
        $this->builders = $this->createMock(Builders::class);
        $this->texts = $this->createMock(Texts::class);
    }

}