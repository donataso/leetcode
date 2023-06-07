<?php

declare(strict_types=1);

namespace Problems\n0104_MaximumDepthOfBinaryTree;

use Leetcode\TreeNode;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(int $expected, array $params): void
    {
        Assert::assertEquals($expected, (new Solution())->maxDepth(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => 3,
                'params' => [
                    TreeNode::fromArray([3, 9, 20, null, null, 15, 7]),
                ],
            ],
            'case 2' => [
                'expected' => 2,
                'params' => [
                    TreeNode::fromArray([1, null, 2]),
                ],
            ],
        ];
    }
}
