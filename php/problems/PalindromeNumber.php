<?php

//declare(strict_types=1);

namespace LeetCode\Problems;

class PalindromeNumber
{
    public function isPalindrome($number)
    {
        $number = "$number";
        $numberLength = strlen($number);
        $realNumberLength = $numberLength - 1;
        for ($i = 0; $i < $numberLength; $i++)
        {
            if ($number[$i] != $number[$realNumberLength - $i]) {
                return false;
            }
        }
        return true;
    }
}
