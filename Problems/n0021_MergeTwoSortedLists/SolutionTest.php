<?php

declare(strict_types=1);

namespace Problems\n0021_MergeTwoSortedLists;

use Leetcode\ListNode;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(?ListNode $expected, array $params): void
    {
        Assert::assertEquals($expected, (new Solution())->mergeTwoLists(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'same length inputs' => [
                'expected' => ListNode::fromArray([1, 2, 2, 3, 4, 4]),
                'params' => [
                    ListNode::fromArray([1, 2, 4]),
                    ListNode::fromArray([2, 3, 4]),
                ]
            ],
            'short inputs' => [
                'expected' => ListNode::fromArray([1, 2]),
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
                'expected' => ListNode::fromArray([1, 2, 4]),
                'params' => [
                    ListNode::fromArray([1, 2, 4]),
                    null,
                ],
            ],
            'one input shorter' => [
                'expected' => ListNode::fromArray([1, 2, 2, 3, 4]),
                'params' => [
                    ListNode::fromArray([1, 2, 4]),
                    ListNode::fromArray([2, 3]),
                ],
            ],
        ];
    }
}
