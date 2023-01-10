<?php

declare(strict_types=1);

namespace Problems\n1342_NumberOfStepsToReduceANumberToZero;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution($expected, $params): void
    {
        Assert::assertEquals($expected, (new Solution())->numberOfSteps(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => 6,
                'params' => [14],
            ],
            'case 2' => [
                'expected' => 4,
                'params' => [8],
            ],
            'case 3' => [
                'expected' => 12,
                'params' => [123],
            ],
        ];
    }
}
