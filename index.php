<?php
/**
 * Created by PhpStorm.
 * User: matas
 * Date: 10/14/17
 * Time: 8:07 PM
 */

use magic_box\Magician;
use other\exportable\Exportable;

require_once 'vendor/autoload.php';

//__callStatic()
Magician::pull('a rabbit');

//__construct()
echo '</br>';
echo 'A new magician was created. Below is his performance.</br>';
$magician = new Magician('David', 'Copperfield');

//__debugInfo()
echo '</br>';
var_dump($magician);

//__toString()
echo '</br></br>';
echo $magician;

//__call()
echo '</br>';
$magician->planking('on nails');

//__set()
echo '</br>';
$magician->catch = 'bullet';

//__invoke()
echo '</br>';
$magician('cut a lady in half');

//__isset() and __get()
echo '</br>';
if (isset($magician->catch)) {
    echo "Now I will do a $magician->catch trick. It is my best!</br>";
}

//__unset()
echo '</br>';
unset($magician->catch);

//__destruct()
echo '</br>';

//__sleep()
$magician = serialize($magician);
echo '</br>';
echo "A magician has left the scene, but it's data is stored here: $magician</br>";

//__weakup()
echo '</br>';
$magician = unserialize($magician);
echo $magician->firstName . " has not come back on stage for a last trick.</br>";

//__clone()
$assistant = clone $magician;

echo $assistant . '</br>';

echo "Here ar the shows credits:</br>";
//__set_state()
$credits = new Exportable();
$credits->artist1 = $magician->getName();
$credits->artist2 = $assistant->getName();

$creditsString = var_export($credits, true);
var_dump($creditsString);

echo '</br></br>Show is over.</br></br>';
