<?php

declare(strict_types=1);

namespace Problems\n0206_ReverseLinkedList;

use Leetcode\ListNode;

/*
 * https://leetcode.com/problems/reverse-linked-list/
 * Difficulty: easy
 */
final class Solution
{
    public function reverseList(?ListNode $head): ?ListNode
    {
        if ($head === null) {
            return null;
        }

        // return $this->reverseIteratively($head);
        return $this->reverseRecursively($head);
    }

    private function reverseIteratively(ListNode $head): ListNode
    {
        $prev = null;
        $next = $head;
        while ($next) {
            $next = $head->next;
            $head->next = $prev;
            $prev = $head;
            if ($next) {
                $head = $next;
            }
        }

        return $head;
    }

    private function reverseRecursively(?ListNode $head, ?ListNode $prev = null): ListNode
    {
        if ($head === null) {
            return $prev;
        }

        $next = $head->next;
        $head->next = $prev;

        return $this->reverseRecursively($next, $head);
    }
}
