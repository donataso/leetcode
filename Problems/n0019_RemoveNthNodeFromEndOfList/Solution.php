<?php

declare(strict_types=1);

namespace Problems\n0019_RemoveNthNodeFromEndOfList;

/*
 * https://leetcode.com/problems/remove-nth-node-from-end-of-list/
 * Difficulty: medium
 */

use Leetcode\ListNode;

final class Solution
{
    public function removeNthFromEnd(ListNode $head, int $n): ?ListNode
    {
        if ($head->next === null) {
            return null;
        }

        $faster = $cur = $start = new ListNode(next: $head);

        while ($n > 0 || $faster->next) {
            if ($faster->next) {
                $faster = $faster->next;
            }

            if ($n > 0) {
                $n--;
                continue;
            }

            $cur = $cur->next;
        }

        $cur->next = $cur->next->next;

        return $start->next;
    }
}
