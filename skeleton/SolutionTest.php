<?php

declare(strict_types=1);

namespace Problems\nXYZ_ProblemName;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(array $expected, array $params): void
    {
        Assert::assertEquals($expected, (new Solution())->solve(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => [],
                'params' => [
                    'param1',
                    'param2',
                ],
            ],
        ];
    }
}
