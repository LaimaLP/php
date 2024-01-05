<?php

class Tenisininkas
{

    private $name;
    private $kamuoliukas = 0;
    static private $zaidejas1;
    static private $zaidejas2; //zaideju objektams saugoti

    public static function sukurtiZaideja($name)
    {
        if (self::$zaidejas1 && self::$zaidejas2) {
            return;
        } else {
            return new self($name);
        }
    }
    private function __construct($name)
    {
        $this->name = $name;

        if (!self::$zaidejas1) {
            self::$zaidejas1 = $this;
        } else {
            self::$zaidejas2 = $this;
        }
    }
    public function arTuriKamuoliuka()
    {
        return $this->kamuoliukas;
    }
    public function perduotiKamuoliuka()
    {
        if ($this->arTuriKamuoliuka()) {
            if (self::$zaidejas1->kamuoliukas) {
                self::$zaidejas1->kamuoliukas = 0;
                self::$zaidejas2->kamuoliukas = 1;
            } else {
                self::$zaidejas1->kamuoliukas = 1;
                self::$zaidejas2->kamuoliukas = 0;
            }
        }
    }

    static public function zaidimoPradzia()
    {
        $parinktasZaidejas  =  rand(0, 1);

        if ($parinktasZaidejas === 0) {
            self::$zaidejas1->kamuoliukas = 1;
        } else {
            self::$zaidejas2->kamuoliukas = 1;
        }
    }
}
