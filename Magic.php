<?php
/**
 * Created by PhpStorm.
 * User: vlastit
 * Date: 23.07.18
 * Time: 18:43
 */

class Magic
{
    public $name;
    public $name1;
    protected $property;

    public function __construct()
    {
        echo "It is Magic<br>";
        $this->name = "Magic";
    }

    function __destruct()
    {
        echo "ooooohhhh nooooo " . $this->name . " was destroyed";
    }

    public function __call($name, $arguments)
    {
        echo "Метод $name не существует<br>";
    }

    public static function __callStatic($name, $arguments)
    {
        echo "Статический метод $name не существует<br>";
    }

    public function __set($name, $value)
    {
        echo "Свойство $name не существует<br>";
    }

    public function __get($name)
    {
        echo "Свойство $name не существует<br>";
    }

    public function __isset($property)
    {
        $this->property = $property;
    }

    public function __unset($property)
    {
        unset($this->property);
    }

    public function __sleep()
    {
        return array('name', 'property');
    }

    public function __wakeup()
    {
        echo "connecting to DATABASE";
    }

    public function __toString()
    {
        return $this->name;
    }

    public function __invoke()
    {
        return $this->name;
    }

    public function __clone()
    {
        $this->name = clone $this->name1;
    }

    public function __debugInfo()
    {
        return ['name' => $this->name,
        ];
    }
}