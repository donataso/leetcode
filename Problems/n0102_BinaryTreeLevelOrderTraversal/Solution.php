<?php

declare(strict_types=1);

namespace Problems\n0102_BinaryTreeLevelOrderTraversal;

use Leetcode\TreeNode;

/*
 * https://leetcode.com/problems/binary-tree-level-order-traversal/
 * Difficulty: medium
 */
final class Solution
{
    public function levelOrder(?TreeNode $root): array
    {
        if ($root === null) {
            return [];
        }

        $result = [];
        $queue = [[$root, 0]];
        while (!empty($queue)) {
            /** @var ?TreeNode $node */
            [$node, $level] = array_shift($queue);

            $result[$level] ??= [];
            $result[$level][] = $node->val;

            $node->left !== null && $queue[] = [$node->left, $level + 1];
            $node->right !== null && $queue[] = [$node->right, $level + 1];
        }

        return $result;
    }
}
