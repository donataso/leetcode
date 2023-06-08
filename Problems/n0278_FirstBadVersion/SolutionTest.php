<?php

declare(strict_types=1);

namespace Problems\n0278_FirstBadVersion;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends Testcase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution(int $expected, int $version, int $bad): void
    {
        $solution = new Solution();
        $solution->setFirstBadVersion($bad);
        Assert::assertEquals($expected, $solution->firstBadVersion($version));
    }

    protected function dataProvider(): iterable
    {
        return [
            'case 1' => [
                'expected' => 4,
                'version' => 5,
                'bad' => 4,
            ],
            'case 2' => [
                'expected' => 1,
                'version' => 1,
                'bad' => 1,
            ],
            'case 3' => [
                'expected' => 2,
                'version' => 2,
                'bad' => 2,
            ],
        ];
    }
}
