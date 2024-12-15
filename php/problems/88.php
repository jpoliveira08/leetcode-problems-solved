<?php

class Solution {

    /**
     * @param int[] $nums1
     * @param int $m
     * @param int[] $nums2
     * @param int $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        $arrayFlag = [];
        for ($i = 0; $i < $m; $i++) {
            $arrayFlag[] = $nums1[$i];
        }

        foreach ($nums2 as $num2) {
            $arrayFlag[] = $num2;
        }

        $nums1 = $arrayFlag;
        sort($nums1);
    }
}