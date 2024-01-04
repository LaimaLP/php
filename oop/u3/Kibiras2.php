<?php

class Kibiras2
{

    static private $akmenuKiekisVisuoseKibiruose = 0;
    private $akmenuKiekis = 0;


    /* kad kiekvienas sukuriamas objektas gautu geteri objekte konstrukte sukuriama savybe/kintamasis */
    public function __construct(){
        $this->akmenuKiekis = 0;
    }


    public function prideti1Akmeni()
    {
       $this->akmenuKiekis += 1;
       self::$akmenuKiekisVisuoseKibiruose +=1;
    }

    public    function pridetiDaugAkmenu($kiekis)
    {
        if (!is_integer($kiekis)) {
            return;
        }
        if ($kiekis < 0) {
            return;
        }
       $this->akmenuKiekis += $kiekis;
       self::$akmenuKiekisVisuoseKibiruose +=$kiekis;

    }
    public    function kiekPririnktaAkmenu()
    {
        return $this->akmenuKiekis;
    }

/* statinis geteris klaseje. AkmenuKiekisVisuoseKibiruose yra statine privati savybe, pasiekiama 
tik per geterio f-ja */
    public static function getAkmenuKiekisVisuoseKibiruose(){
        return self::$akmenuKiekisVisuoseKibiruose;
    }
   
}
