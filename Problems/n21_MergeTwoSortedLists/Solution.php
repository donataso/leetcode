<?php

declare(strict_types=1);

namespace Problems\n21_MergeTwoSortedLists;

use Leetcode\ListNode;

class Solution
{
    public function mergeTwoLists(?ListNode $list1, ?ListNode $list2): ?ListNode
    {
        $result = new ListNode();
        $head = $result;
        while ($list1 && $list2) {
            if ($list1->val < $list2->val) {
                $head->next = $list1;
                $list1 = $list1->next;
            } else {
                $head->next = $list2;
                $list2 = $list2->next;
            }

            $head = $head->next;
        }

        if (!$list1) {
            $head->next = $list2;
        } elseif (!$list2) {
            $head->next = $list1;
        }

        return $result->next;
    }
}
