<?php

declare(strict_types=1);

namespace Problems\n0326_PowerOfThree;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(bool $expected, array $params): void
    {
        Assert::assertEquals($expected, (new Solution())->isPowerOfThree(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => true,
                'params' => [
                    27,
                ],
            ],
            'case 2' => [
                'expected' => false,
                'params' => [
                    0,
                ],
            ],
            'case 3' => [
                'expected' => false,
                'params' => [
                    -1,
                ],
            ],
            'case 4' => [
                'expected' => true,
                'params' => [
                    1,
                ],
            ],
            'case 5' => [
                'expected' => true,
                'params' => [
                    243,
                ],
            ],
        ];
    }
}
