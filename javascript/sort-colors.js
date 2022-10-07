var sortColors = function(nums) {
    let aux;
    for (let i = 0; i < nums.length - 1; i++) {
        for (let j = i + 1; j < nums.length; j++) {
            if (nums[j] < nums[i]) {
                aux = nums[i];
                nums[i] = nums[j];
                nums[j] = aux;
            }
        }
    }

    return nums;
};