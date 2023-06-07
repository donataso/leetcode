<?php

declare(strict_types=1);

namespace Problems\n0003_LongestSubstringWithoutRepeatingCharacters;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(int $expected, array $params): void
    {
        Assert::assertEquals($expected, (new Solution())->lengthOfLongestSubstring(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => 3,
                'params' => [
                    'abcabcbb',
                ],
            ],
            'case 2' => [
                'expected' => 1,
                'params' => [
                    'bbbbb',
                ],
            ],
            'case 3' => [
                'expected' => 3,
                'params' => [
                    'pwwkew',
                ],
            ],
        ];
    }
}
