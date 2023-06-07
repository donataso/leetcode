<?php

declare(strict_types=1);

namespace Problems\n0014_LongestCommonPrefix;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(string $expected, array $params): void
    {
        Assert::assertEquals($expected, (new Solution())->longestCommonPrefix(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => 'fl',
                'params' => [
                    ['flower', 'flow', 'flight'],
                ],
            ],
            'case 2' => [
                'expected' => '',
                'params' => [
                    ['dog', 'racecar', 'car'],
                ],
            ],
        ];
    }
}
