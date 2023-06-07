<?php

declare(strict_types=1);

namespace Problems\n0206_ReverseLinkedList;

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
        Assert::assertEquals($expected, (new Solution())->reverseList(...$params)?->toArray() ?? []);
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => [5, 4, 3, 2, 1],
                'params' => [
                    ListNode::fromArray([1, 2, 3, 4, 5]),
                ],
            ],
            'case 2' => [
                'expected' => [2, 1],
                'params' => [
                    ListNode::fromArray([1,2]),
                ],
            ],
            'case 3' => [
                'expected' => [],
                'params' => [
                    null,
                ],
            ],
        ];
    }
}
