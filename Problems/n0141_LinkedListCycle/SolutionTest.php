<?php

declare(strict_types=1);

namespace Problems\n0141_LinkedListCycle;

use Leetcode\ListNode;
use Leetcode\TreeNode;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution($expected, $params): void
    {
        /** @var ListNode $list */
        $list = $params['list'];
        /** @var int $pos */
        $pos = $params['pos'];

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
                'params' => [
                    'list' => ListNode::fromArray([3, 2, 0, -4]),
                    'pos' => 1,
                ],
            ],
            'case 2' => [
                'expected' => true,
                'params' => [
                    'list' => ListNode::fromArray([1, 2]),
                    'pos' => 0,
                ],
            ],
            'case 3' => [
                'expected' => false,
                'params' => [
                    'list' => ListNode::fromArray([1]),
                    'pos' => -1,
                ],
            ],
        ];
    }
}
