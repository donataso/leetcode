<?php

declare(strict_types=1);

namespace Problems\n0141_LinkedListCycle;

use Leetcode\ListNode;

/*
 * https://leetcode.com/problems/linked-list-cycle/
 * Difficulty: easy
 */
final class Solution
{
    public function hasCycle(?ListNode $head): bool
    {
        if ($head === null) {
            return false;
        }

        $slow = $head;
        $fast = $head->next;
        while ($fast?->next?->next) {
            if ($slow === $fast) {
                return true;
            }

            $fast = $fast?->next?->next;
            $slow = $slow->next;
        }

        return false;
    }
}
