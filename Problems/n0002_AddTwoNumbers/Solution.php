<?php

declare(strict_types=1);

namespace Problems\n0002_AddTwoNumbers;

use Leetcode\ListNode;

/*
 * https://leetcode.com/problems/add-two-numbers/description/
 * Difficulty: medium
 */
final class Solution
{
    public function addTwoNumbers(ListNode $l1, ListNode $l2): ListNode
    {
        $result = new ListNode();
        $curr = null;
        $carry = 0;
        while ($l1 || $l2 || $carry > 0) {
            if (!$curr) {
                $curr = $result;
            } else {
                $curr->next = new ListNode();
                $curr = $curr->next;
            }

            $sum = ($l1?->val ?? 0) + ($l2?->val ?? 0) + $carry;
            $curr->val = $sum % 10;
            $carry = (int) (($sum - $curr->val) / 10);

            $l1 = $l1?->next;
            $l2 = $l2?->next;
        }

        return $result;
    }
}
