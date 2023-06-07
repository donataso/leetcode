<?php

declare(strict_types=1);

namespace Problems\n0141_LinkedListCycle;

use Leetcode\ListNode;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(bool $expected, ListNode $list, int $pos): void
    {
        if ($pos >= 0) {
            $list->last()->next = $list->nth($pos);
        }

        Assert::assertEquals($expected, (new Solution())->hasCycle($list));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => true,
                'list' => ListNode::fromArray([3, 2, 0, -4]),
                'pos' => 1,
            ],
            'case 2' => [
                'expected' => true,
                'list' => ListNode::fromArray([1, 2]),
                'pos' => 0,
            ],
            'case 3' => [
                'expected' => false,
                'list' => ListNode::fromArray([1]),
                'pos' => -1,
            ],
        ];
    }
}
