<?php

use AldoBarr\RandomString\Generators\FlexibleRandomStringGenerator;
use AldoBarr\RandomString\Generators\RandomStringGenerator;
use PHPUnit\Framework\TestCase;

class RandomStringGeneratorTest extends TestCase{
	use ContainsOnlyCharacters;

	public function testShouldReturnStringWithGivenLength(){
		$generator = new RandomStringGenerator;
		for ($length = 1; $length <= 10; $length++) {
			for ($i = 0; $i < 1000; $i++) {
				$this->assertEquals($length, strlen($generator->generate($length)));
			}
		}
	}

	public function testRandomLengthString(){
		$generator = new RandomStringGenerator;
		for ($i = 0; $i < 5000; $i++) {
			$length = random_int(1, 40);
			$this->assertEquals($length, strlen($generator->generate($length)));
		}
	}

	public function testAlphaNumericOnly(){
		$valid_chars = $this->getValidChars(FlexibleRandomStringGenerator::ALPHANUMERIC);

		$generator = new RandomStringGenerator;
		for ($length = 10; $length <= 20; $length++) {
			for ($i = 0; $i < 1000; $i++) {
				$string = $generator->generate($length);

				$this->assertEquals($length, strlen($string));
				$this->assertContainsOnlyAlphabet($valid_chars, $string);
			}
		}
	}
}
