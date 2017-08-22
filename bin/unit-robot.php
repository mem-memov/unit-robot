<?php
namespace MemMemov\UnitRobot;

use MemMemov\UnitRobot\Source\Description\Instance\Instancies as SourceDescriptionInstancies;
use MemMemov\UnitRobot\Source\Description\Dependency\Dependencies as SourceDescriptionDependencies;
use MemMemov\UnitRobot\Source\Description\Property\Properties as SourceDescriptionProperties;
use MemMemov\UnitRobot\Source\Description\Parameter\Parameters as SourceDescriptionParameters;
use MemMemov\UnitRobot\Source\Description\Signature\Signatures as SourceDescriptionSignatures;
use MemMemov\UnitRobot\Source\Description\Type\Scalar\ScalarTypes as SourceDescriptionScalarTypes;
use MemMemov\UnitRobot\Source\Description\Type\Types as SourceDescriptionTypes;
use MemMemov\UnitRobot\Source\File\Directories as SourceDirectories;
use MemMemov\UnitRobot\Source\File\DirectoryIterators as SourceDirectoryIterators;
use MemMemov\UnitRobot\Source\File\Files as SourceFiles;
use MemMemov\UnitRobot\Source\File\Texts as SourceTexts;
use MemMemov\UnitRobot\Source\Reflection\Reflections as SourceReflections;
use MemMemov\UnitRobot\Source\Reflection\Method\Methods as SourceMethods;
use MemMemov\UnitRobot\Source\Reflection\Method\MethodComments as SourceMethodsComments;
use MemMemov\UnitRobot\Source\Reflection\Method\Call\Calls as SourceCalls;
use MemMemov\UnitRobot\Source\Reflection\Method\Call\Parser\Parser as SourceParser;
use MemMemov\UnitRobot\Source\Reflection\Method\Call\Positionings as SourcePositionings;
use MemMemov\UnitRobot\Source\Reflection\Method\Call\Type\CallTypes as SourceCallTypes;
use MemMemov\UnitRobot\Source\Reflection\Method\Call\Variable\Variables as SourceVariables;
use MemMemov\UnitRobot\Source\Reflection\Comment\MethodComments as SourceMethodComments;
use MemMemov\UnitRobot\Source\Reflection\Constructor\Constructors as SourceConstructors;
use MemMemov\UnitRobot\Source\Reflection\Constructor\ClassConstructors as SourceClassConstructors;
use MemMemov\UnitRobot\Source\Reflection\Parameter\Parameters as SourceParameters;
use MemMemov\UnitRobot\Source\Token\Tokens as SourceTokens;
use MemMemov\UnitRobot\Source\Token\MethodSignatures as SourceTokenMethodSignatures;
use MemMemov\UnitRobot\Source\Token\MethodBodies as SourceTokenMethodBodies;
use MemMemov\UnitRobot\UnitTest\File\Directories as UnitTestDirectories;
use MemMemov\UnitRobot\UnitTest\File\Files as UnitTestFiles;
use MemMemov\UnitRobot\UnitTest\UnitTests;
use MemMemov\UnitRobot\UnitTest\Builder\Declarations as UnitTestDeclarations;
use MemMemov\UnitRobot\UnitTest\Builder\Builders as UnitTestBuilders;
use MemMemov\UnitRobot\UnitTest\File\Texts as UnitTestTexts;
use MemMemov\UnitRobot\UnitTest\Builder\PhpDeclaration as UnitTestPhpDeclaration;

require __DIR__ . '/../vendor/autoload.php';

$configuration = require __DIR__ . '/../unit-robot.config.php';

$options = getopt('', ['class::']);

$sourceDescriptionSignatures = new SourceDescriptionSignatures();
$sourceDescriptionInstancies = new SourceDescriptionInstancies();
$sourceTokens = new SourceTokens();
$sourceDescriptionTypes = new SourceDescriptionTypes(
    new SourceDescriptionScalarTypes()
);
$sourceParameters = new SourceParameters(
    new SourceDescriptionProperties(
        $sourceDescriptionTypes
    ),
    new SourceDescriptionParameters(
        $sourceDescriptionTypes
    ),
    $sourceDescriptionInstancies,
    $sourceDescriptionSignatures
);
$sourceTokenMethodSignatures = new SourceTokenMethodSignatures($sourceTokens);
$sourceMethodComments = new SourceMethodComments();

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
                    $sourceTokenMethodSignatures,
                    new SourceTokenMethodBodies($sourceTokens),
                    $sourceParameters,
                    new SourceCalls(
                        new SourceParser(),
                        new SourcePositionings(),
                        new SourceCallTypes(),
                        new SourceVariables()
                    ),
                    $sourceMethodComments,
                    $sourceDescriptionSignatures,
                    $sourceDescriptionTypes
                ),
                new SourceDescriptionDependencies(),
                new SourceClassConstructors(
                    new SourceConstructors(
                        $sourceTokenMethodSignatures,
                        $sourceParameters,
                        $sourceMethodComments,
                        $sourceDescriptionInstancies
                    )
                ),
                $sourceDescriptionInstancies
            ),
            new UnitTests(
                new UnitTestDeclarations(),
                new UnitTestBuilders(
                    new UnitTestPhpDeclaration()
                ),
                new UnitTestTexts()
            ),
            isset($options['class']) ? $options['class'] : null
        ),
        new UnitTestDirectories(
            new UnitTestFiles()
        )
    )
);

$unitRobot->createTests();