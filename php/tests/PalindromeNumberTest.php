<?php

require_once 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use LeetCode\Problems\PalindromeNumber;

class PalindromeNumberTest extends TestCase
{
    private $solution;

    protected function setUp(): void
    {
        $this->solution = new PalindromeNumber();
    }

    public function testPalindromeNumberMustBeTrue()
    {
        static::assertTrue(
            $this->solution->isPalindrome(121)
        );
    }

    public function testNumberWithSignalShouldNotBePalindrome()
    {
        static::assertFalse(
            $this->solution->isPalindrome(-121)
        );
    }

    public function testNumberIsNotPalindrome()
    {
        static::assertFalse(
            $this->solution->isPalindrome(10)
        );
    }
}