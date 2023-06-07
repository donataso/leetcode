<?php

declare(strict_types=1);

namespace Problems\n0104_MaximumDepthOfBinaryTree;

use Leetcode\TreeNode;

/*
 * https://leetcode.com/problems/maximum-depth-of-binary-tree/
 * Difficulty: easy
 */
final class Solution
{
    public function maxDepth(?TreeNode $root): int
    {
        return $this->maxDepthRecursive($root);
//        return $this->maxDepthDfs($root);
    }

    public function maxDepthRecursive(?TreeNode $root): int
    {
        if ($root === null) {
            return 0;
        }

        return max(
            $this->maxDepthRecursive($root->left),
            $this->maxDepthRecursive($root->right),
        ) + 1;
    }

    public function maxDepthDfs(?TreeNode $root): int
    {
        if ($root === null) {
            return 0;
        }

        $maxDepth = 0;
        $stack = [[$root, 1]];
        while (count($stack) > 0) {
            [$current, $depth] = array_pop($stack);
            $maxDepth = max($maxDepth, $depth);

            $current?->right && array_push($stack, [$current?->right, $depth + 1]);
            $current?->left && array_push($stack, [$current?->left, $depth + 1]);
        }

        return $maxDepth;
    }
}
