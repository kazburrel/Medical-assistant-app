function findMissingNumber(nums) {
    const n = nums.length;
    const expectedSum = (n * (n + 1)) / 2; // Sum of numbers from 0 to n
    const actualSum = nums.reduce((acc, num) => acc + num, 0); // Sum of elements in the array
    return expectedSum - actualSum; // The difference is the missing number
}

// Example usage:
const nums = [3, 0, 1];
const missingNumber = findMissingNumber(nums);
console.log(missingNumber); // Output: 2
