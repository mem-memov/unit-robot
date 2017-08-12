<?php
namespace MemMemov\UnitRobot;

use MemMemov\UnitRobot\Source\File\Directories as SourceDirectories;
use MemMemov\UnitRobot\Source\File\DirectoryIterators as SourceDirectoryIterators;
use MemMemov\UnitRobot\Source\File\Files as SourceFiles;
use MemMemov\UnitRobot\Source\File\Texts as SourceTexts;
use MemMemov\UnitRobot\Source\Reflection\Reflections as SourceReflections;
use MemMemov\UnitRobot\Source\Reflection\Methods as SourceMethods;
use MemMemov\UnitRobot\Source\Token\Tokens as SourceTokens;
use MemMemov\UnitRobot\UnitTest\File\Directories as UnitTestDirectories;
use MemMemov\UnitRobot\UnitTest\File\Files as UnitTestFiles;
use MemMemov\UnitRobot\UnitTest\UnitTests;
use MemMemov\UnitRobot\UnitTest\Builder\Declarations as UnitTestDeclarations;
use MemMemov\UnitRobot\UnitTest\Builder\Builders as UnitTestBuilders;
use MemMemov\UnitRobot\UnitTest\File\Texts as UnitTestTexts;
use MemMemov\UnitRobot\UnitTest\Builder\PhpDeclaration as UnitTestPhpDeclaration;

require __DIR__ . '/../vendor/autoload.php';

$configuration = require __DIR__ . '/../unit-robot.config.php';

$unitRobot = new UnitRobot(
    new Configuration(
        $configuration,
        new SourceDirectories(
            new SourceDirectoryIterators(),
            new SourceFiles(
                new SourceTexts()
            ),
            new SourceReflections(
                new SourceMethods(
                    new SourceTokens()
                ),
                new UnitTests(
                    new UnitTestDeclarations(),
                    new UnitTestBuilders(
                        new UnitTestPhpDeclaration()
                    ),
                    new UnitTestTexts()
                )
            )
        ),
        new UnitTestDirectories(
            new UnitTestFiles()
        )
    )
);

$unitRobot->createTests();