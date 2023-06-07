<?php

declare(strict_types=1);

namespace Problems\n0101_SymmetricTree;

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
        Assert::assertEquals($expected, (new Solution())->isSymmetric(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => true,
                'params' => [
                    TreeNode::fromArray([1, 2, 2, 3, 4, 4, 3]),
                ],
            ],
            'case 2' => [
                'expected' => false,
                'params' => [
                    TreeNode::fromArray([1, 2, 2, null, 3, null, 3]),
                ],
            ],
        ];
    }
}
