<?php

declare(strict_types=1);

namespace Problems\n0098_ValidateBinarySearchTree;

use Leetcode\TreeNode;

/*
 * https://leetcode.com/problems/validate-binary-search-tree
 * Difficulty: medium
 */
class Solution {
    private ?int $prev = null;

    public function isValidBST(?TreeNode $root): bool
    {
        return $this->validateInorder($root);
//        return $this->validateRecursively($root, null, null);
    }

    private function validateRecursively(?TreeNode $root, ?int $minValue, ?int $maxValue): bool
    {
        if ($root === null) {
            return true;
        }

        if (($minValue !== null && $root->val <= $minValue) || ($maxValue !== null && $root->val >= $maxValue)) {
            return false;
        }

        return $this->validateRecursively($root->left, $minValue, $root->val)
            && $this->validateRecursively($root->right, $root->val, $maxValue);
    }

    private function validateInorder(?TreeNode $root): bool
    {
        if ($root === null) {
            return true;
        }

        if (!$this->validateInorder($root->left)) {
            return false;
        }

        if ($this->prev !== null && $root->val <= $this->prev) {
            return false;
        }
        $this->prev = $root->val;

        return $this->validateInorder($root->right);
    }
}
