<?php
/**
 * Created by PhpStorm.
 * User: nayan
 * Date: 3/1/19
 * Time: 5:56 PM
 */

namespace App;

class Addition
{
    /**
     * @param array $values
     * @return int|mixed
     */
    public function calculate(array $values)
    {
        return array_sum($values);
    }
}