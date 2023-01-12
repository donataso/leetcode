<?php

declare(strict_types=1);

namespace Problems\n0876_MiddleOfTheLinkedList;

use Leetcode\ListNode;

/*
 * https://leetcode.com/problems/middle-of-the-linked-list/description/
 * Difficulty: easy
 */
final class Solution
{
    public function middleNode(ListNode $head): ListNode
    {
        $slow = $head;
        $fast = $head;
        while ($fast?->next) {
            $slow = $head->next;
            $fast = $fast->next?->next;

            $head = $head->next;
        }

        return $slow;
    }
}
