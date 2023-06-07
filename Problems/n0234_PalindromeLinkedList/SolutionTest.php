<?php

declare(strict_types=1);

namespace Problems\n0234_PalindromeLinkedList;

use Leetcode\ListNode;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(bool $expected, array $params): void
    {
        Assert::assertEquals($expected, (new Solution())->isPalindrome(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => false,
                'params' => [
                    ListNode::fromArray([4, 5, 6]),
                ],
            ],
            'case 2' => [
                'expected' => true,
                'params' => [
                    ListNode::fromArray([1, 2, 3, 3, 2, 1]),
                ],
            ],
            'case 3' => [
                'expected' => true,
                'params' => [
                    ListNode::fromArray([1, 2, 1]),
                ],
            ],
            'case 4' => [
                'expected' => true,
                'params' => [
                    ListNode::fromArray([1, 2, 3, 5, 3, 2, 1]),
                ],
            ],
            'case 5' => [
                'expected' => true,
                'params' => [
                    ListNode::fromArray([1, 2, 2, 1]),
                ],
            ],
            'case 6' => [
                'expected' => true,
                'params' => [
                    ListNode::fromArray([1, 1]),
                ],
            ],
            'case 7' => [
                'expected' => true,
                'params' => [
                    ListNode::fromArray([1]),
                ],
            ],
        ];
    }
}
