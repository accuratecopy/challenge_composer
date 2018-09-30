<?php
/**
 * Created by PhpStorm.
 * User: wilder14
 * Date: 27/09/18
 * Time: 10:24
 */

require '../vendor/autoload.php';

$Hello1 = new \App\Wcs\Hello();
echo $Hello1->talk() . "<br/>";

$Hello2 = new \HelloWorld\SayHello();
echo $Hello2->world();