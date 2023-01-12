<?php

declare(strict_types=1);

namespace Problems\n0234_PalindromeLinkedList;

use Leetcode\ListNode;

/*
 * https://leetcode.com/problems/palindrome-linked-list/description/
 * Difficulty: easy
 */
final class Solution
{
    /**
     * Idea: go to just before the middle of the list, at the same time inverting the direction.
     * Then compare starting from the center.
     */
    public function isPalindrome(ListNode $head): bool
    {
        if (!$head->next) {
            return true;
        }

        $slow = $head;
        $fast = $head->next;
        $prev = null;
        $next = $slow->next;
        while ($fast?->next?->next) {
            $fast = $fast->next?->next;

            $slow->next = $prev;
            $prev = $slow;
            $slow = $next;
            $next = $slow->next;
        }
        $slow->next = $prev;

        if ($fast->next) { // elements count is odd and fast is the last but one element
            $next = $next->next; // $next is on the exact middle which should be ignored
        }

        while ($slow || $next) {
            if ($slow?->val !== $next?->val) {
                return false;
            }

            $slow = $slow->next;
            $next = $next->next;
        }

        return true;
    }
}
