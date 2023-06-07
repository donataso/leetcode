<?php

declare(strict_types=1);

namespace Problems\n0101_SymmetricTree;

use Leetcode\TreeNode;

/*
 * https://leetcode.com/problems/symmetric-tree/
 * Difficulty: easy
 */
final class Solution
{
    public function isSymmetric(?TreeNode $root): bool
    {
        return $this->isSymmetricBfs($root);
    }

    private function isSymmetricBfs(?TreeNode $root): bool
    {
        if ($root === null) {
            return true;
        }

        $levelValues = [];
        $previousLevel = 0;
        $queue = [[$root, 0]];
        while (!empty($queue)) {
            /** @var ?TreeNode $node */
            [$node, $level] = array_shift($queue);

            if ($previousLevel !== $level) {
                if ($levelValues !== array_reverse($levelValues)) {
                    return false;
                }

                $previousLevel = $level;
                $levelValues = [];
            }

            $levelValues[] = $node?->val;

            if ($node === null) {
                continue;
            }

            array_push($queue, [$node->left, $level + 1], [$node->right, $level + 1]);
        }

        return true;
    }
}
