<?php
class Joagotchi
{
    private $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    function setName($new_name)
    {
        $this->name = (string) $new_name;
    }

    // function save()
    // {
    //     array_push($_SESSION['list_of_tasks'], $this);
    // }
    //
    // static function getAll()
    // {
    //     return $_SESSION['list_of_tasks'];
    // }
    //
    // static function deleteAll()
    // {
    //     $_SESSION['list_of_tasks'] = array();
    // }
}

 ?>
