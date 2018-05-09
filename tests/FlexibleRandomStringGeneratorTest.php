<?php
namespace Datapp\RandomString;

use PHPUnit\Framework\TestCase;
use Datapp\RandomString\FlexibleRandomStringGenerator;

class FlexibleRandomStringGeneratorTest extends TestCase
{

    public function testShouldReturnStringWithGivenLength()
    {
        $generator = new FlexibleRandomStringGenerator();
        for ($length = 1; $length <= 10; $length++) {
            for ($i = 0; $i < 1000; $i++) {
                $this->assertEquals($length, strlen($generator->generate($length)));
            }
        }
    }
}
