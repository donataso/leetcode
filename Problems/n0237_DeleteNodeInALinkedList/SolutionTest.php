<?php

declare(strict_types=1);

namespace Problems\n0237_DeleteNodeInALinkedList;

use Leetcode\ListNode;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(array $expected, ListNode $head, int $nodeValue): void
    {
        $node = $head;
        while ($node && $node->val != $nodeValue) {
            $node = $node->next;
        }

        (new Solution())->deleteNode($node);
        Assert::assertEquals($expected, $head->toArray());
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => [4, 1, 9],
                'head' => ListNode::fromArray([4, 5, 1, 9]),
                'nodeValue' => 5,
            ],
            'case 2' => [
                'expected' => [4, 5, 9],
                'head' => ListNode::fromArray([4, 5, 1, 9]),
                'nodeValue' => 1,
            ],
        ];
    }
}
