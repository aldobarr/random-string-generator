<?php

use AldoBarr\RandomString\Generators\FlexibleRandomStringGenerator;
use PHPUnit\Framework\TestCase;

class FlexibleRandomStringGeneratorTest extends TestCase{
	use ContainsOnlyCharacters;

	public function testShouldReturnStringWithGivenLength(){
		$generator = new FlexibleRandomStringGenerator;
		for ($length = 1; $length <= 10; $length++) {
			for ($i = 0; $i < 1000; $i++) {
				$this->assertEquals($length, strlen($generator->generate($length)));
			}
		}
	}

	public function testRandomLengthString(){
		$generator = new FlexibleRandomStringGenerator;
		for ($i = 0; $i < 5000; $i++) {
			$length = random_int(1, 40);
			$this->assertEquals($length, strlen($generator->generate($length)));
		}
	}

	public function testAlphaOnlyStrings(){
		$valid_chars = $this->getValidChars(FlexibleRandomStringGenerator::ALPHABET);

		$generator = new FlexibleRandomStringGenerator(FlexibleRandomStringGenerator::ALPHABET);
		for ($length = 10; $length <= 20; $length++) {
			for ($i = 0; $i < 1000; $i++) {
				$string = $generator->generate($length);

				$this->assertEquals($length, strlen($string));
				$this->assertContainsOnlyAlphabet($valid_chars, $string);
			}
		}
	}

	public function testNumericOnlyStrings(){
		$valid_chars = $this->getValidChars(FlexibleRandomStringGenerator::NUMERIC);

		$generator = new FlexibleRandomStringGenerator(FlexibleRandomStringGenerator::NUMERIC);
		for ($length = 10; $length <= 20; $length++) {
			for ($i = 0; $i < 1000; $i++) {
				$string = $generator->generate($length);

				$this->assertEquals($length, strlen($string));
				$this->assertContainsOnlyAlphabet($valid_chars, $string);
			}
		}
	}

	public function testLowerCaseOnlyStrings(){
		$valid_chars = $this->getValidChars(FlexibleRandomStringGenerator::ALPHABET_LOWERCASE);

		$generator = new FlexibleRandomStringGenerator(FlexibleRandomStringGenerator::ALPHABET_LOWERCASE);
		for ($length = 10; $length <= 20; $length++) {
			for ($i = 0; $i < 1000; $i++) {
				$string = $generator->generate($length);

				$this->assertEquals($length, strlen($string));
				$this->assertContainsOnlyAlphabet($valid_chars, $string);
			}
		}
	}

	public function testUpperCaseOnlyStrings(){
		$valid_chars = $this->getValidChars(FlexibleRandomStringGenerator::ALPHABET_UPPERCASE);

		$generator = new FlexibleRandomStringGenerator(FlexibleRandomStringGenerator::ALPHABET_UPPERCASE);
		for ($length = 10; $length <= 20; $length++) {
			for ($i = 0; $i < 1000; $i++) {
				$string = $generator->generate($length);

				$this->assertEquals($length, strlen($string));
				$this->assertContainsOnlyAlphabet($valid_chars, $string);
			}
		}
	}

	public function testLowerCaseOnlyAlphaNumericStrings(){
		$valid_chars = $this->getValidChars(FlexibleRandomStringGenerator::ALPHANUMERIC_LOWERCASE);

		$generator = new FlexibleRandomStringGenerator(FlexibleRandomStringGenerator::ALPHANUMERIC_LOWERCASE);
		for ($length = 10; $length <= 20; $length++) {
			for ($i = 0; $i < 1000; $i++) {
				$string = $generator->generate($length);

				$this->assertEquals($length, strlen($string));
				$this->assertContainsOnlyAlphabet($valid_chars, $string);
			}
		}
	}
	
	public function testUpperCaseOnlyAlphaNumericStrings(){
		$valid_chars = $this->getValidChars(FlexibleRandomStringGenerator::ALPHANUMERIC_UPPERCASE);

		$generator = new FlexibleRandomStringGenerator(FlexibleRandomStringGenerator::ALPHANUMERIC_UPPERCASE);
		for ($length = 10; $length <= 20; $length++) {
			for ($i = 0; $i < 1000; $i++) {
				$string = $generator->generate($length);

				$this->assertEquals($length, strlen($string));
				$this->assertContainsOnlyAlphabet($valid_chars, $string);
			}
		}
	}
}
