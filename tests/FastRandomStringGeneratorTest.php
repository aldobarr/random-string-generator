<?php
namespace Datapp\RandomString;

use PHPUnit\Framework\TestCase;
use Datapp\RandomString\FastRandomStringGenerator;

class FastRandomStringGeneratorTest extends TestCase
{

    public function testShouldReturnStringWithGivenLength()
    {
        $generator = new FastRandomStringGenerator();
        for ($length = 1; $length <= 10; $length++) {
            for ($i = 0; $i < 1000; $i++) {
                $this->assertEquals($length, strlen($generator->generate($length)));
            }
        }
    }
}
