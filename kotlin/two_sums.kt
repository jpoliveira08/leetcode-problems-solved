fun twoSum(nums: IntArray, target: Int): IntArray {
    var i = 0
    var j = 1
    while (i < (nums.size - 1)) {
        while (j < nums.size) {
            if (nums[i] + nums[j] == targe) {
                return intArrayof(i, j)
            }
            j++
        }
        i++
    }
}
