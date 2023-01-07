<?php

namespace Problems\nXYZ_ProblemName;

use Testcase;

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
