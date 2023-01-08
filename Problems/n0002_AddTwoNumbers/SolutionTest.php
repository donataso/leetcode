<?php

declare(strict_types=1);

namespace Problems\n0002_AddTwoNumbers;

use Leetcode\ListNode;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution($expected, $params): void
    {
        Assert::assertEquals($expected, (new Solution())->addTwoNumbers(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'same length inputs' => [
                'expected' => ListNode::fromArray([7, 0, 8]),
                'params' => [
                    ListNode::fromArray([2, 4, 3]),
                    ListNode::fromArray([5, 6, 4]),
                ]
            ],
            'zeroes' => [
                'expected' => new ListNode(0),
                'params' => [
                    new ListNode(0),
                    new ListNode(0),
                ]
            ],
            'different length inputs' => [
                'expected' => ListNode::fromArray([8, 9, 9, 9, 0, 0, 0, 1]),
                'params' => [
                    ListNode::fromArray([9, 9, 9, 9, 9, 9, 9]),
                    ListNode::fromArray([9, 9, 9, 9]),
                ]
            ],
        ];
    }
}
