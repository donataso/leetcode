<?php

declare(strict_types=1);

namespace Problems\nXYZ_ProblemName;

use Leetcode\Testcase;

class SolutionTest extends Testcase
{

    protected function getMethodToTest(): callable
    {
        return (new Solution())->main(...);
    }

    protected function dataProvider(): iterable
    {
        return [
            [
                'expected' => [],
                'params' => [
                    'param1',
                    'param2',
                ],
            ],
        ];
    }
}