<?php

class Solution {

    /**
    * @param Integer[] $nums
    * @return Integer
    */
    function findMaxConsecutiveOnes($nums) {
        $countOnes = 0;
        $countOnesFlag = 0;

        foreach ($nums as $num) {
            if ($num === 1) {
                $countOnes++;
            } else {
                $countOnes = 0;
            }

            $countOnesFlag = max($countOnesFlag, $countOnes);
        }

        return $countOnesFlag;
    }
}