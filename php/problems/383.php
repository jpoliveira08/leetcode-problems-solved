class Solution {

    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    function canConstruct($ransomNote, $magazine) {
        $casket = [];

        for ($i = strlen($magazine) - 1; $i >= 0 ; $i--) {
            $casket[$magazine[$i]]++;
        }

        for ($j = strlen($ransomNote) - 1; $j >= 0 ; $j--) {
            if ($casket[$ransomNote[$j]]-- == 0) {
                return false;
            }
        }
        
        return true;
    }
}
