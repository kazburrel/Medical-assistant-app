function twoSum(nums, target) {
    const numIndices = {};

    for (let i = 0; i < nums.length; i++) {
        const complement = target - nums[i];

        if (numIndices.hasOwnProperty(nums[i])) {
            return [numIndices[nums[i]], i];
        }

        numIndices[complement] = i;
    }
}

const nums = [2, 7, 11, 15];
const target = 9;
const result = twoSum(nums, target);
console.log(result);
// hjgb
