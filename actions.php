<?php
/**
 * Created by PhpStorm.
 * User: nayan
 * Date: 4/1/19
 * Time: 6:24 PM
 */

require './vendor/autoload.php';

use App\Addition;
use App\Multiplication;

$addition = new Addition();
$multiplication = new Multiplication();

if (!isset($argv[1])) {
    echo 'Operation missing..!!' . "\n" . PHP_EOL;
    echo "Use Following Operators : " . "\n";
    echo "'add'" . "\n";
    echo "'multiply'" . "\n\n";
    exit(0);
}

try {
    $numbers = isset($argv[2]) ? $argv[2] : '';
    if ($numbers !== '') {
        $arr_numbers = explode(',', $numbers);

        switch ($argv[1]) {
            case 'add':
                echo "Addition is  => " . $addition->calculate($arr_numbers);
                echo "\n";
                break;
            case 'multiply':
                echo "Multiplication is  => " . $multiplication->multiply($arr_numbers);
                echo "\n";
                break;
            default:
                echo 'Please check the operator.' . PHP_EOL;
        }
    } else {
        throw new Exception("Arguments must be comma seperated numbers....!!!!!");
    }

} catch (Exception $e) {
    echo 'Message: ' . $e->getMessage() . "\n";
}