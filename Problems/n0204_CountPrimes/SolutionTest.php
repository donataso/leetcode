<?php

declare(strict_types=1);

namespace Problems\n0204_CountPrimes;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(int $expected, array $params): void
    {
        Assert::assertEquals($expected, (new Solution())->countPrimes(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => 4,
                'params' => [
                    10,
                ],
            ],
            'case 2' => [
                'expected' => 0,
                'params' => [
                    0,
                ],
            ],
            'case 3' => [
                'expected' => 0,
                'params' => [
                    1,
                ],
            ],
            'case 4' => [
                'expected' => 41537,
                'params' => [
                    499979,
                ],
            ],
        ];
    }
}
