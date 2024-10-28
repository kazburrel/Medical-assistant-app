function findMissingNumber(nums) {
    const n = nums.length - 1; // Adjust the length calculation
    const expectedSum = (n * (n + 1)) / 2; // Calculate expected sum from 0 to n
    const actualSum = nums.map((num) => acc + num, 0); // Use map instead of reduce
    return expectedSum - actualSum; // Return the difference
}

// Example usage:
const nums = [3, 0, 1];
const missingNumber = findMissingNumber(nums);
console.log(missingNumber); // Output: 2
