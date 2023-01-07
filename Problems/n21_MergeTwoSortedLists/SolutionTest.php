<?php

declare(strict_types=1);

namespace Problems\n21_MergeTwoSortedLists;

use Leetcode\ListNode;
use Leetcode\Testcase;

class SolutionTest extends Testcase
{
    protected function getResults(...$params): ?ListNode
    {
        return (new Solution())->mergeTwoLists(...$params);
    }

    protected function dataProvider(): iterable
    {
        return [
            'same length inputs' => [
                'expected' => new ListNode(
                    1,
                    new ListNode(2, new ListNode(2, new ListNode(3, new ListNode(4, new ListNode(4))))),
                ),
                'params' => [
                    new ListNode(1, new ListNode(2, new ListNode(4))),
                    new ListNode(2, new ListNode(3, new ListNode(4))),
                ]
            ],
            'short inputs' => [
                'expected' => new ListNode(1, new ListNode(2)),
                'params' => [
                    new ListNode(1),
                    new ListNode(2),
                ],
            ],
            'only nulls' => [
                'expected' => null,
                'params' => [
                    null,
                    null,
                ],
            ],
            'one null' => [
                'expected' => new ListNode(1, new ListNode(2, new ListNode(4))),
                'params' => [
                    new ListNode(1, new ListNode(2, new ListNode(4))),
                    null,
                ],
            ],
            'one input shorter' => [
                'expected' => new ListNode(1, new ListNode(2, new ListNode(2, new ListNode(3, new ListNode(4))))),
                'params' => [
                    new ListNode(1, new ListNode(2, new ListNode(4))),
                    new ListNode(2, new ListNode(3)),
                ],
            ],
        ];
    }
}
