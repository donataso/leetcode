<?php

declare(strict_types=1);

namespace Problems\n0098_ValidateBinarySearchTree;

use Leetcode\TreeNode;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(bool $expected, array $params): void
    {
        Assert::assertEquals($expected, (new Solution())->isValidBST(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => true,
                'params' => [
                    TreeNode::fromArray([2, 1, 3])
                ],
            ],
            'case 2' => [
                'expected' => false,
                'params' => [
                    TreeNode::fromArray([5, 1, 4, null, null, 3, 6]),
                ],
            ],
        ];
    }
}
