<?php

declare(strict_types=1);

namespace Problems\n0237_DeleteNodeInALinkedList;

use Leetcode\ListNode;

/*
 * https://leetcode.com/problems/delete-node-in-a-linked-list/
 * Difficulty: medium
 */
final class Solution
{
    public function deleteNode(ListNode $node): void
    {
        $prev = null;
        while ($node->next !== null) {
            $node->val = $node->next->val;
            $prev = $node;
            $node = $node->next;
        }

        $prev->next = null;
    }
}
