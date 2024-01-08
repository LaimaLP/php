<?php

class MarsoPalydovas
{

    private static $sukurtiObjektai = [];
    //static, nes sia savybe dalinasi visi objektai sukuriami is klases
    private static $kiekSukurtaPalydovu = 0;
    private  $name;

    private function __construct($initialName)
    {
        $this->name = $initialName;
        self::$sukurtiObjektai[] = $this;
        //$this tai konkreciai tas sukurtas objektas, o self::$sukurti... , naudojam self, nes statine savybe
    }
    public static function  sukurtiPalydova()
    {
        if (self::$kiekSukurtaPalydovu < 2) {
            self::$kiekSukurtaPalydovu++;
            return   new self(self::$kiekSukurtaPalydovu == 1 ? "Deimas" : "Fobas");
        } else {
            return     self::$sukurtiObjektai[rand(0, 1)];
        }
    }
    public function getName()
    {
        return $this->name;
    }
}
