<?php

namespace Nctfish\IcsGenerator;

class IcsGeneratorTest extends \PHPUnit_Framework_TestCase
{
    public function test_get_ics_file_contents_returns_string_with_values()
    {
      $icsGenerator = new IcsGenerator();

      $fileContents = $icsGenerator
      ->setDescription('Test Description')
      ->setLocation('Test Location')
      ->getString();

      $this->assertInternalType('string', $fileContents);
    }

    public function test_setters_are_fluent()
    {
      $setterMethods = preg_grep('/^set/', get_class_methods(new IcsGenerator));

      foreach($setterMethods as $setterMethod){
          $icsGenerator = new IcsGenerator;

          $returnedObject = $icsGenerator->$setterMethod('Hello');

          $this->assertInstanceOf(IcsGenerator::class, $returnedObject);
      }
    }
}
