function findMutualFriends(users, userId) {
    // Create a map for quick access to user objects by their ID
    const userMap = new Map(users.map((user) => [user.id, user]));

    // Helper function to recursively find mutual friends
    function getMutualFriends(currentId, visited = new Set()) {
        if (!userMap.has(currentId) || visited.has(currentId)) {
            return [];
        }

        visited.add(currentId);
        const currentUser = userMap.get(currentId);
        let mutualFriends = [];

        // Check each friend of the current user
        for (const friendId of currentUser.friends) {
            if (friendId !== userId) {
                mutualFriends.push(friendId);
                mutualFriends = mutualFriends.concat(
                    getMutualFriends(friendId, visited)
                );
            }
        }

        return mutualFriends;
    }

    // Start the search from the given user ID
    const mutualFriendIds = getMutualFriends(userId);

    // Remove duplicates and map IDs back to names
    const uniqueMutualFriendIds = [...new Set(mutualFriendIds)];
    return uniqueMutualFriendIds.map((id) => userMap.get(id).name);
}

// Example usage
const users = [
    { id: 1, name: "Alice", friends: [2, 3] },
    { id: 2, name: "Bob", friends: [1, 4] },
    { id: 3, name: "Charlie", friends: [1, 4] },
    { id: 4, name: "David", friends: [2, 3] },
    { id: 5, name: "Eve", friends: [] },
];

console.log(findMutualFriends(users, 1)); // Output: ['Bob', 'Charlie', 'David']
