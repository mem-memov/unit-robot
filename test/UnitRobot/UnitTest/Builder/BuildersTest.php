<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use PHPUnit\Framework\TestCase;

final class BuildersTest extends TestCase
{
    protected $phpDeclaration;

    protected function setUp(): void
    {
        $this->phpDeclaration = $this->createMock(PhpDeclaration::class);
    }

    public function testItCanCreateBuilder(): void
    {
    }
}