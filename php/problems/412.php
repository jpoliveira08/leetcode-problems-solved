class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */
    function fizzBuzz($n) {
        // $n is a number, so not for each
        $response = [];

        for ($i = 1; $i <= $n; $i++) {
            if (($i % 3 === 0) && ($i % 5 === 0)) {
                $response[] = "FizzBuzz";
            } elseif ($i % 3 === 0) {
                $response[] = "Fizz";
            } elseif ($i % 5 === 0) {
                $response[] = "Buzz";
            } else {
                $response[] = "{$i}";
            }
        }

        return $response;
    }
}
