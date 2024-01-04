<?php
/*pvz kai static metodas kontroliuoja krepselio obj sukurima:
objekto dar nera, o daryt jau reikia;*/
class Cart
{
    private static $cartObject;

    public static function getCart()
    {
        return self::$cartObject ?? self::$cartObject = new self;;
    }
    private function __construct()
    {        //kontruktorius privatus, taip uzdraudzia susikurti obj su new
    
    }
}
