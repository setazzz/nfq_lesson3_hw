<?php
/**
 * Created by PhpStorm.
 * User: matas
 * Date: 10/14/17
 * Time: 8:07 PM
 */

include 'magic_box/Magician.php';
include 'Connection.php';

echo '//__callStatic()</br>';
Magician::pull('a rabbit');

echo '//__construct()</br>';
echo 'A new magician was created. Below is his performance.</br>';
$magician = new Magician('David', 'Copperfield');

echo '//__debugInfo()</br>';
var_dump($magician);

echo '</br>//__toString()</br>';
echo $magician;

echo '//__call()</br>';
$magician->planking('on nails');

echo '//__set()</br>';
$magician->catch = 'bullet';

echo '//__invoke()</br>';
$magician('cut a lady in half');

echo '//__isset() and __get()</br>';
if (isset($magician->catch)) {
    echo "Now I will do a " . $magician->catch . " trick. It is my best!</br>";
}

echo '//__unset()</br>';
unset($magician->catch);

echo '//__destruct()</br>';
