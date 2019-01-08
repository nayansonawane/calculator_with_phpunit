<?php

namespace UnitTests;

use App\Addition;
use PHPUnit\Framework\TestCase;

/**
 * Class AdditionTest
 * @package UnitTests
 */
class AdditionTest extends TestCase
{
    /**
     * Test case for adding values
     * @dataProvider additionValuesProvider
     */
    public function testAddvalues(array $arr_numbers, $expected)
    {
        $addition = new Addition();
        $this->assertEquals($expected, $addition->calculate($arr_numbers));
    }

    /**
     * Provides data for addition test
     * @return array
     */
    public function additionValuesProvider()
    {
        return [
            [[2, 3, 4], 9],
            [[1, 1], 2]
        ];
    }

}