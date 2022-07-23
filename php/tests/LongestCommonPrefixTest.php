<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use LeetCode\Problems\LongestCommonPrefix;

class LongestCommonPrefixTest extends TestCase
{
    private $solution;

    protected function setUp(): void
    {
        $this->solution = new LongestCommonPrefix();
    }

    public function testShouldReturnANonEmptyStringIfThereIsACommomPrefixBetweenTheStrings(): void
    {
        static::assertEquals("fl", $this->solution->longestCommonPrefix(["flower","flow","flight"]));
    }

    public function testShouldReturnAnEmptyStringIfThereIsNoCommomPrefix(): void
    {
        static::assertEmpty($this->solution->longestCommonPrefix(["dog","racecar","car"]));
    }
}