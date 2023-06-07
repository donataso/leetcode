<?php

declare(strict_types=1);

namespace Problems\n0387_FirstUniqueCharacterInAString;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(int $expected, array $params): void
    {
        Assert::assertEquals($expected, (new Solution())->firstUniqChar(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => 0,
                'params' => [
                    'leetcode',
                ],
            ],
            'case 2' => [
                'expected' => 2,
                'params' => [
                    'loveleetcode',
                ],
            ],
            'case 3' => [
                'expected' => -1,
                'params' => [
                    'aabb',
                ],
            ],
        ];
    }
}
