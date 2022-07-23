<?php

declare(strict_types=1);

namespace LeetCode\Problems;

class BackspaceStringCompare
{
    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    public function backspaceCompare(string $s, string $t)
    {
        if ($this->transformString($s) == $this->transformString($t)) {
            return true;
        }
        return false;
    }
    private function transformString(string $string)
    {
        do {
            for ($i=1; $i < strlen($string); $i++) { 
                if ($string[$i] == '#') {
                    $offset = $i - 1;
                    $subString = substr($string, $offset, 2);
                    $string = str_replace($subString, '', $string);
                }
            }
        } while (strpos($string, '#') && $string[0] != '#');
        return $string;
    }
}

$solution = new BackspaceStringCompare();
var_dump($solution->backspaceCompare('a##c', '#a#c'));