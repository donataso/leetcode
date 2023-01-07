<?php

declare(strict_types=1);

namespace Leetcode;

use PHPUnit\Framework\Assert;

abstract class Testcase extends \PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testSolution($expected, $params): void
    {
        $result = $this->getResults(...$params);

        // cannot use assertSame() as I also have to compare objects
        Assert::assertEquals($expected, $result);
    }

    abstract protected function getResults(...$params): mixed;

    abstract protected function dataProvider(): iterable;
}
