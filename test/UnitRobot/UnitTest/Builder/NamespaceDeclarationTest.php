<?php
declare(strict_types=1);

namespace MemMemov\UnitRobot\UnitTest\Builder;

use MemMemov\UnitRobot\UnitTest\File\Text;
use PHPUnit\Framework\TestCase;

final class NamespaceDeclarationTest extends TestCase
{
    protected $namespaceName;

    protected function setUp(): void
    {
        $this->namespaceName = 'some namespaceName value';
    }

    public function testItCanAppend(): void
    {
        $namespaceDeclaration = new NamespaceDeclaration($this->namespaceName);

        $namespaceDeclaration->append();
    }
}