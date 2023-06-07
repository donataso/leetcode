<?php

declare(strict_types=1);

namespace Problems\n0108_ConvertSortedArrayToBinarySearchTree;

use Leetcode\TreeNode;

/*
 * https://leetcode.com/problems/convert-sorted-array-to-binary-search-tree/description/
 * Difficulty: easy
 */
final class Solution
{
    /**
     * @param int[] $nums
     */
    public function sortedArrayToBST(array $nums): ?TreeNode
    {
        if (empty($nums)) {
            return null;
        }

        $tree = new TreeNode();
        $this->splitAndInsert($tree, $nums);

        return $tree;
    }

    private function splitAndInsert(TreeNode $node, array $nums): void
    {
        $middleIdx = intdiv(count($nums), 2);
        $node->val = $nums[$middleIdx];

        $leftNums = array_slice($nums, 0, $middleIdx);
        if (!empty($leftNums)) {
            $node->left = new TreeNode();
            $this->splitAndInsert($node->left, $leftNums);
        }

        $rightNums = array_slice($nums, $middleIdx + 1);
        if (!empty($rightNums)) {
            $node->right = new TreeNode();
            $this->splitAndInsert($node->right, $rightNums);
        }
    }
}
