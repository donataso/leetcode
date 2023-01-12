<?php

declare(strict_types=1);

namespace Problems\n0876_MiddleOfTheLinkedList;

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
        Assert::assertEquals($expected, (new Solution())->middleNode(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => ListNode::fromArray([3, 4, 5]),
                'params' => [
                    ListNode::fromArray([1, 2, 3, 4, 5]),
                ],
            ],
            'case 2' => [
                'expected' => ListNode::fromArray([4, 5, 6]),
                'params' => [
                    ListNode::fromArray([1, 2, 3, 4, 5, 6]),
                ],
            ],
        ];
    }
}
