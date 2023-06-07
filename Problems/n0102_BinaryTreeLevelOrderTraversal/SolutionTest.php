<?php

declare(strict_types=1);

namespace Problems\n0102_BinaryTreeLevelOrderTraversal;

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
        Assert::assertEquals($expected, (new Solution())->levelOrder(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => [[3], [9, 20], [15, 7]],
                'params' => [
                    TreeNode::fromArray([3, 9, 20, null, null, 15, 7]),
                ],
            ],
            'case 2' => [
                'expected' => [[1]],
                'params' => [
                    TreeNode::fromArray([1]),
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
