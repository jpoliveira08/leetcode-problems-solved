<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use LeetCode\Problems\BackspaceStringCompare;

class BackspaceStringCompareTest extends TestCase
{
    public function testBackspaceCompare()
    
    {
        $solution = new BackspaceStringCompare();

        $case1 = $solution->backspaceCompare('ab#c', 'ad#c');
        $case2 = $solution->backspaceCompare('ab##', 'c#d#');
        $case3 = $solution->backspaceCompare('a#c', 'b');
        $case4 = $solution->backspaceCompare('a##c', '#a#c');
        $case5 = $solution->backspaceCompare('bxj##tw', 'bxo#j##tw');

        static::assertTrue($case1);
        static::assertTrue($case2);
        static::assertFalse($case3);
        static::assertTrue($case4);
        static::assertTrue($case5);
    }

}

