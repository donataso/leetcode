<?php

namespace Problems\n21_MergeTwoSortedLists;

use ListNode;

class SolutionTest extends \Testcase
{

    protected function getMethodToTest(): callable
    {
        return (new Solution())->mergeTwoLists(...);
    }

    protected function dataProvider(): iterable
    {
        return [
            [
                'expected' => new ListNode(1, new ListNode(2, new ListNode(2, new ListNode(3, new ListNode(4, new ListNode(4)))))),
                new ListNode(1, new ListNode(2, new ListNode(4))),
                new ListNode(2, new ListNode(3, new ListNode(4))),
            ],
            [
                'expected' => new ListNode(1, new ListNode(2)),
                new ListNode(1),
                new ListNode(2),
            ],
            [
                'expected' => null,
                null,
                null,
            ],
            [
                'expected' => new ListNode(1, new ListNode(2, new ListNode(4))),
                new ListNode(1, new ListNode(2, new ListNode(4))),
                null,
            ],
            [
                'expected' => new ListNode(1, new ListNode(2, new ListNode(2, new ListNode(3, new ListNode(4))))),
                new ListNode(1, new ListNode(2, new ListNode(4))),
                new ListNode(2, new ListNode(3)),
            ],
        ];
    }
}
