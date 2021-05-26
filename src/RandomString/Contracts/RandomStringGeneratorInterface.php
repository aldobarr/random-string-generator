<?php
namespace AldoBarr\RandomString\Contracts;

interface RandomStringGeneratorInterface
{

    /**
     * @param int $length the length of the requested random string
     * @return string
     */
    public function generate(int $length = 16): string;
}
