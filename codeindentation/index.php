<?php
/**
 * Created by PhpStorm.
 * User: Kabir
 * Date: 04/07/2016
 * Time: 13:18
 */

$name = 'Kabir';
$age = 25;
if (strtolower($name)==='kabir') {
    if($age>=25) {
        echo 'You\'re over 25';
        if (1===1) {
            echo 'Yes, 1 is equal to 1!';
        }
    } else {
        echo 'Not over 25';
    }
} else {
    echo 'You\'re not Kabir!';
}
?>