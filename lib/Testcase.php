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
        $result = $this->getMethodToTest()(...$params);

        Assert::assertEquals($expected, $result);
    }

    abstract protected function getMethodToTest(): callable;

    abstract protected function dataProvider(): iterable;
}
