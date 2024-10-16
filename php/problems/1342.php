class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function numberOfSteps($num) {
        $count = 0;

        while ($num >= 1) {
            if ($num % 2 === 0) {
                $num = $num / 2;
            } else {
                $num--;
            }

            $count++;
        }

        return $count;
    }
}
