<?php
/**
 * Created by PhpStorm.
 * User: nayan
 * Date: 4/1/19
 * Time: 3:42 PM
 */

namespace App;


class Multiplication
{
    /**
     * @param $num1
     * @param $num2
     * @return float|int
     */
    public function multiply(array $arr_numbers)
    {
        $total = 1;
        foreach ($arr_numbers as $num) {
            $total = $total * $num;
        }
        return $total;
    }
}