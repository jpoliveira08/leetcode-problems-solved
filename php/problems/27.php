<?php

/**
 * Time Complexity: O(n)
 * Space Complexity: O(1)
 */
class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        /**
         * Input $nums and $val
         * Output $nums and $integerVal
         * 
         * Remover todos $val dentro do array $nums
         */
        foreach ($nums as $key => $num) {
            if ($num === $val) {
                unset($nums[$key]);
            }
        }

        return count($nums);
    }
}