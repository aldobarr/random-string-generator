<?php
namespace Datapp\RandomString;

use Datapp\RandomString\RandomStringGeneratorInterface;

/**
 * faster implementation as the flexible version under the condition of setting 
 * a length greater than 1.
 */
class FastRandomStringGenerator implements RandomStringGeneratorInterface
{

    /**
     * @param int $length the length of the requested random string
     * @return string
     */
    public function generate(int $length): string
    {
        return substr(str_replace(['+', '/', '='], '', base64_encode(random_bytes($length * 2))), 0, $length);
    }
}
