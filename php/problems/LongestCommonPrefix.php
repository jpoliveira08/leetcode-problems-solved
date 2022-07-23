<?php

declare(strict_types=1);

namespace LeetCode\Problems;

class LongestCommonPrefix
{
    /**
    * @param String[] $strs
    * @return String
    */
    public function longestCommonPrefix($strs) {
        $smallerString = $this->getTheSmallerString($strs);
        $flag3 = "";

        for ($i=0; $i < strlen($smallerString); $i++) { 
            $flag = substr($smallerString, $i);
            for ($j=1; $j <= strlen($flag); $j++) { 
                $flag2 = substr($smallerString, $i, $j);
                
            }
        }
        return $flag3;
    }
    private function getTheSmallerString($strs)
    {
        $smallerOne = $strs[0];
        for ($i = 0; $i < count($strs); $i++) {
            if (strlen($strs[$i]) < strlen($smallerOne)) {
                $smallerOne = $strs[$i];
            }
        }

        return $smallerOne;
    }
}
$long = new LongestCommonPrefix();
var_dump($long->longestCommonPrefix(["flower","flow","flight"]));
