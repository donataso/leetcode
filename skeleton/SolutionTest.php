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
    public function testSolution($expected, $params): void
    {
        Assert::assertEquals($expected, (new Solution())->solve(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case X' => [
                'expected' => [],
                'params' => [
                    'param1',
                    'param2',
                ],
            ],
        ];
    }
}
