<?php

declare(strict_types=1);

namespace Leetcode;

class ListNode
{
    public function __construct(public ?int $val = 0, public ?ListNode $next = null)
    {
    }

    public function __toString(): string
    {
        $result = [];
        $head = $this;
        while ($head) {
            $result[] = $head->val;
            $head = $head->next;
        }

        return json_encode($result);
    }
}
