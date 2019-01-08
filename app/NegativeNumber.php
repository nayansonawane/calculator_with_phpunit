<?php
/**
 * Created by PhpStorm.
 * User: nayan
 * Date: 4/1/19
 * Time: 2:22 PM
 */

namespace App;


use App\Exceptions\ZeroNumberException;

class NegativeNumber
{
    public function checkNumber(float $num)
    {
        if($num < 0) {
            return true;
        } elseif ($num > 0) {
            return false;
        } else {
            throw new ZeroNumberException();
        }
    }
}