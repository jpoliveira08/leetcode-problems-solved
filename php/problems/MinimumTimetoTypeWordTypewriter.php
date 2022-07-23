<?php

declare(strict_types=1);

namespace LeetCode\Problems;

class MinimumTimetoTypeWordTypewriter
{
    /**
     * @param string $word
     *
     * @return int
     */
    public function minTimeToType($string) {
        $string = strtolower($string);
        $positionPointer = 0;
        $amount = 0;
    
        for ($i = 0; $i < strlen($string); $i++) {
            // Finding the position number of desired position
            $flag = ord($string[$i]) - 97;
            
            // Abs between old position and desired position
            $clock = abs($positionPointer - $flag);
    
            // Finding the and clock for old position and desirerd one (26 = clock elements)
            $reverseClock = 26 - $clock;
    
            // Check the closest path between clock and reverse clock direction
            $amount += min($clock, $reverseClock);
    
            // One second to print the character
            $amount++; 
    
            // Setting the old position for next iteration
            $positionPointer = $flag;
        }
    
        return $amount;
    }
}
