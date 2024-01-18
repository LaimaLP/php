<?php

namespace Colors\App;

//veiks kaip servisas, atsakingas uz zinuciu generavima.
class Message
{
    private static $message;
    private $show, $error = false;
    public static function get()
    { //duoda objekta. singeltona, t.y viena 
        return self::$message ?? self::$message = new self; //jeigu nera, sukkurk.
    }

    private function __construct()
    { //konstruoja zinutes
        if (isset($_SESSION['message'])) {
            $this->show = $_SESSION['message']; //is message paima message ir ji uzsetina
            unset($_SESSION['message']);
        }
    }
    public function show()
    {
        return $this->show ?? false;
    }

    public function set($type = 'succes', $message)
    { //iraso i sesija message

        $this->error = true;


        $_SESSION['message'] = [
            'text' => $message,
            'type' => $type
        ];
    }

    public function hasErrors()
    {
        return $this->error;
    }
}
