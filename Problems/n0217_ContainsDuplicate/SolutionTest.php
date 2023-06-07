<?php

declare(strict_types=1);

namespace Problems\n0217_ContainsDuplicate;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(bool $expected, array $params): void
    {
        Assert::assertEquals($expected, (new Solution())->containsDuplicate(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => true,
                'params' => [
                    [1, 2, 3, 1],
                ],
            ],
            'case 2' => [
                'expected' => false,
                'params' => [
                    [1, 2, 3, 4],
                ],
            ],
            'case 3' => [
                'expected' => true,
                'params' => [
                    [1, 1, 1, 3, 3, 4, 3, 2, 4, 2],
                ],
            ],
        ];
    }
}
