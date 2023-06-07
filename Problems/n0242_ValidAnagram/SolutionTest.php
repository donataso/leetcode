<?php

declare(strict_types=1);

namespace Problems\n0242_ValidAnagram;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(bool $expected, array $params): void
    {
        Assert::assertEquals($expected, (new Solution())->isAnagram(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => true,
                'params' => [
                    'anagram',
                    'nagaram',
                ],
            ],
            'case 2' => [
                'expected' => false,
                'params' => [
                    'rat',
                    'car',
                ],
            ],
        ];
    }
}
