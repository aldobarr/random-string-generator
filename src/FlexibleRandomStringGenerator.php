<?php
namespace Datapp\RandomString;

use Datapp\RandomString\RandomStringGeneratorInterface;

class FlexibleRandomStringGenerator implements RandomStringGeneratorInterface
{

    const NUMERIC = '0123456789';
    const ALPHABET_LOWERCASE = 'abcdefghijklmnopqrstuvwxyz';
    const ALPHABET_UPPERCASE = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    const ALPHABET = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    const ALPHANUMERIC_LOWERCASE = '0123456789abcdefghijklmnopqrstuvwxyz';
    const ALPHANUMERIC_UPPERCASE = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    const ALPHANUMERIC = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    /**
     * @var string 
     */
    private $charset;

    /**
     * @param string $charset
     */
    public function __construct(string $charset = self::ALPHANUMERIC)
    {
        $this->charset = $charset;
    }

    /**
     * @param int $length the length of the requested random string
     * @return string
     */
    public function generate(int $length): string
    {
        $charactersLength = strlen($this->charset);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $this->charset[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
