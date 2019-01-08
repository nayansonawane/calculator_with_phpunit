<?php
/**
 * Created by PhpStorm.
 * User: nayan
 * Date: 4/1/19
 * Time: 3:25 PM
 */

namespace UnitTests;

use PHPUnit\Framework\TestCase;

class MultiplicationTest extends TestCase
{

    /**
     * @dataProvider positiveNumbersProvider
     */
    public function testPositiveNumberMultiplication($arr_numbers, $expected)
    {
        $multiplication = new \App\Multiplication();
        $this->assertEquals($expected, $multiplication->multiply($arr_numbers));
    }

    /**
     * @dataProvider negativeNumbersProvider
     */
    public function testNegativeNumberMultiplication($arr_numbers, $expected)
    {
        $multiplication = new \App\Multiplication();
        $this->assertEquals($expected, $multiplication->multiply($arr_numbers));
    }

    /**
     * @dataProvider positiveNegativeNumbersProvider
     */
    public function testPositiveNegativeNumberMultiplication($arr_numbers, $expected)
    {
        $multiplication = new \App\Multiplication();
        $this->assertEquals($expected, $multiplication->multiply($arr_numbers));
    }

    /**
     * @dataProvider numbersConsistingZeroProvider
     */
    public function testMultiplicationConsistingZero($arr_numbers, $expected)
    {
        $multiplication = new \App\Multiplication();
        $this->assertEquals($expected, $multiplication->multiply($arr_numbers));
    }

    /**
     * @return array
     */
    public function positiveNumbersProvider()
    {
        return [
            [[2,3], 6],
            [[3, 4], 12]
        ];
    }

    /**
     * @return array
     */
    public function negativeNumbersProvider()
    {
        return [
            [[-4, -1], 4],
            [[-5, -5], 25]
        ];
    }

    /**
     * @return array
     */
    public function positiveNegativeNumbersProvider()
    {
        return [
            [[-3, 2], -6],
            [[-5, 5], -25]
        ];
    }

    /**
     * @return array
     */
    public function numbersConsistingZeroProvider()
    {
        return [
            [[0, 1], 0],
            [[12, 0], 0]
        ];
    }

}