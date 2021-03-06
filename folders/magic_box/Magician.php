<?php
/**
 * Created by PhpStorm.
 * User: matas
 * Date: 10/14/17
 * Time: 8:01 PM
 */
namespace magic_box;

class Magician
{
    private $firstName;
    private $lastName;
    private $tricks;

    public function getName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function __toString()
    {
        return "Hello, this is $this->firstName $this->lastName!</br>";
    }

    public function __call($name, $arguments)
    {
        echo "I don't know how to do '$name "
            . implode(', ', $arguments). "'</br>";
    }

    public static function __callStatic($name, $arguments)
    {
        echo "A crowd wants to see '$name "
            . implode(', ', $arguments). "' trick.</br>";
    }

    public function __set($name, $value)
    {
        echo "'$name a $value' added to tricks list.</br>";
        $this->tricks[$name] = $value;
    }

    public function __isset($name)
    {
        return isset($this->tricks[$name]);
    }

    public function __unset($name)
    {
        echo "A trick with a " . $this->tricks[$name] . " was successful.</br>";
        unset($this->tricks[$name]);
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->tricks)) {
            return $this->tricks[$name];
        }

        return null;
    }

    public function __invoke($badTrick)
    {
        echo "I will not do '$badTrick' trick, it's too dangerous.</br>";
    }

    public function __debugInfo() {
        return [
            'Magician' => $this->firstName . ' ' . $this->lastName,
        ];
    }

    public function __sleep()
    {
        return array('firstName', 'lastName', 'tricks');
    }

    public function __wakeup()
    {
        echo $this->firstName;
    }

    public function __clone()
    {
        $this->lastName .= "'s clone";
    }

    function __destruct() {
        echo "$this->firstName $this->lastName has left the scene</br>";
    }
}