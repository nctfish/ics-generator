<?php

namespace Nctfish\IcsGenerator;

use DateTime;

class IcsGeneratorTest extends \PHPUnit_Framework_TestCase
{
    public function test_get_ics_file_contents_returns_string_with_values()
    {
        $icsGenerator = new IcsGenerator();

        $testDate = new DateTime();

        $fileContents = $icsGenerator
      ->setDescription('Test Description')
      ->setLocation('Test Location')
      ->setDtStart($testDate)
      ->setDtEnd($testDate)
      ->__toString();

        $this->assertInternalType('string', $fileContents);
    }

    public function test_setters_are_fluent()
    {
        $setterMethods = preg_grep('/^set(?!Dt)/', get_class_methods(new IcsGenerator()));

        foreach ($setterMethods as $setterMethod) {
            $icsGenerator = new IcsGenerator();

            $returnedObject = $icsGenerator->$setterMethod('Hello');

            $this->assertInstanceOf(IcsGenerator::class, $returnedObject);
        }
    }

    public function test_casting_to_string_builds_the_ics_string()
    {
        $generator = (new IcsGenerator)
            ->setDescription('Test')
            ->setLocation('Test')
            ->setDtstart($dt = new \DateTime)
            ->setDtend($dt->add(new \DateInterval('P4D')));

        $this->assertTrue(is_string((string) $generator));
    }
}
