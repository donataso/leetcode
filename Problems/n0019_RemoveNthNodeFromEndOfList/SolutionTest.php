<?php

declare(strict_types=1);

namespace Problems\n0019_RemoveNthNodeFromEndOfList;

use Leetcode\ListNode;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(array $expected, array $params): void
    {
        Assert::assertEquals($expected, (new Solution())->removeNthFromEnd(...$params)?->toArray() ?? []);
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => [1, 2, 3, 5],
                'params' => [
                    ListNode::fromArray([1, 2, 3, 4, 5]),
                    2,
                ],
            ],
            'case 2' => [
                'expected' => [],
                'params' => [
                    ListNode::fromArray([1]),
                    1,
                ],
            ],
            'case 3' => [
                'expected' => [1],
                'params' => [
                    ListNode::fromArray([1, 2]),
                    1,
                ],
            ],
        ];
    }
}
