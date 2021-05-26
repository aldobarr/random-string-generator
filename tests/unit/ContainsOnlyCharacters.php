<?php

trait ContainsOnlyCharacters{
	private function getValidChars(string $alphabet): array{
		$valid_chars = [];
		for	($i = 0; $i < strlen($alphabet); $i++) {
			$valid_chars[] = $alphabet[$i];
		}

		return $valid_chars;
	}

	private function assertContainsOnlyAlphabet(array $valid_chars, string $string){
		$valid = true;
		for ($i = 0; $i < strlen($string); $i++) {
			if (!in_array($string[$i], $valid_chars)) {
				$valid = false;
				break;
			}
		}

		$this->assertThat(true, $this->equalTo($valid));
	}
}