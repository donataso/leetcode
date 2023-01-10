<?php

declare(strict_types=1);

namespace Problems\n0383_RansomNote;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution($expected, $params): void
    {
        Assert::assertEquals($expected, (new Solution())->canConstruct(...$params));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => false,
                'params' => ['a', 'b'],
            ],
            'case 2' => [
                'expected' => false,
                'params' => ['aa', 'ab'],
            ],
            'case 3' => [
                'expected' => true,
                'params' => ['aa', 'aab'],
            ],
        ];
    }
}
