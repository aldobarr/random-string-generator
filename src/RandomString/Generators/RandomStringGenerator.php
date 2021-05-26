<?php
namespace AldoBarr\RandomString\Generators;

use AldoBarr\RandomString\Contracts\RandomStringGeneratorInterface;

class RandomStringGenerator implements RandomStringGeneratorInterface{
	/**
	 * @param int $length the length of the requested random string
	 * @return string
	 */
	public function generate(int $length = 16): string{
		$random_string = '';
		$len = 0;

		do{
			$remaining_len = $length - $len;
			$random_string .= substr(str_replace(['+', '/', '='], '', base64_encode(random_bytes($remaining_len))), 0, $remaining_len);
			$len = strlen($random_string);
		}while($len < $length);

		return $random_string;
	}
}
