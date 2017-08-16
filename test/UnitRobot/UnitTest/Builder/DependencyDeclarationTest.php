<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;
use PHPUnit\Framework\TestCase;

final class DependencyDeclarationTest extends TestCase
{
    protected $useStatement;

    protected function setUp(): void
    {
        $this->useStatement = 'some $this->useStatement value';
    }

    public function testItCanAppend(): void
    {
        $dependencyDeclaration = new DependencyDeclaration($this->useStatement);

        $text = $this->createMock(Text::class);

        $dependencyDeclaration->append($text);
    }
}