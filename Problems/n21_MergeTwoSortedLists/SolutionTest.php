<?php

declare(strict_types=1);

namespace Problems\n21_MergeTwoSortedLists;

use ListNode;
use Testcase;

class SolutionTest extends Testcase
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
                'params' => [
                    new ListNode(1, new ListNode(2, new ListNode(4))),
                    new ListNode(2, new ListNode(3, new ListNode(4))),
                ]
            ],
            [
                'expected' => new ListNode(1, new ListNode(2)),
                'params' => [
                    new ListNode(1),
                    new ListNode(2),
                ],
            ],
            [
                'expected' => null,
                'params' => [
                    null,
                    null,
                ],
            ],
            [
                'expected' => new ListNode(1, new ListNode(2, new ListNode(4))),
                'params' => [
                    new ListNode(1, new ListNode(2, new ListNode(4))),
                    null,
                ],
            ],
            [
                'expected' => new ListNode(1, new ListNode(2, new ListNode(2, new ListNode(3, new ListNode(4))))),
                'params' => [
                    new ListNode(1, new ListNode(2, new ListNode(4))),
                    new ListNode(2, new ListNode(3)),
                ],
            ],
        ];
    }
}
