<?php
/**
 * Created by PhpStorm.
 * User: matas
 * Date: 10/15/17
 * Time: 9:26 PM
 */
namespace other\exportable;

class Exportable
{
    public $artist1;
    public $artist2;

    public static function __set_state($an_array) // As of PHP 5.1.0
    {
        $obj = new Exportable();
        $obj->artist1 = $an_array['artist1'];
        $obj->artist2 = $an_array['artist2'];
        return $obj;
    }
}