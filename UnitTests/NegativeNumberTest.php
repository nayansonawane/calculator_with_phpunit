<?php
/**
 * Created by PhpStorm.
 * User: nayan
 * Date: 4/1/19
 * Time: 12:31 PM
 */

namespace UnitTests;

use App\Exceptions\ZeroNumberException;
use App\NegativeNumber;
use PHPUnit\Framework\TestCase;

class NegativeNumberTest extends TestCase
{
    /**
     * @dataProvider negativeNumberProvider
     */
    public function testNegativeNumber($num)
    {
        $check_negative_number = new NegativeNumber();
        $this->assertTrue($check_negative_number->checkNumber($num));
    }

    /**
     * @dataProvider positiveNumberProvider
     */
    public function testPostiveNumber($num)
    {
        $check_negative_number = new NegativeNumber();
        $this->assertFalse($check_negative_number->checkNumber($num));
    }

    /**
     * @dataProvider zeroNumberProvider
     */
    public function testZeroNumber($num)
    {
        $this->expectException(ZeroNumberException::class);
        $check_negative_number = new NegativeNumber();
        $check_negative_number->checkNumber($num);
    }

    /**
     * @return array
     */
    public function negativeNumberProvider()
    {
        return [
            [-1]
        ];
    }

    /**
     * @return array
     */
    public function positiveNumberProvider()
    {
        return [
            [1]
        ];
    }

    /**
     * @return array
     */
    public function zeroNumberProvider()
    {
        return [
            [0]
        ];
    }
}