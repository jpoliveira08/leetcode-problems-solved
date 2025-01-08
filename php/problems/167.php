<?php

class Solution {

    /**
     * @param Integer[] $numbers
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($numbers, $target) {
        $hashMap = [];
        $result = [];

        foreach ($numbers as $position => $number) {
            if (isset($hashMap[$number])) {
                return [$hashMap[$number], $position];
            }
            $complement = $target - $number;
            $hashMap[$complement] = $position;
        }

        return $result;
    }
}