<?php

declare(strict_types=1);

namespace Problems\n0028_FindTheIndexOfTheFirstOccurrenceInAString;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(int $expected, array $params): void
    {
        Assert::assertEquals($expected, (new Solution())->strStr(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => 0,
                'params' => [
                    'haystack' => 'sadbutsad',
                    'needle' => 'sad',
                ],
            ],
            'case 2' => [
                'expected' => -1,
                'params' => [
                    'haystack' => 'leetcode',
                    'needle' => 'leeto',
                ],
            ],
        ];
    }
}
