<?php

class MarsoPalydovas{

    private static $sukurtiObjektai = [];
    //static, nes sia savybe dalinasi visi objektai sukuriami is klases
    private static $kiekSukurtaPalydovu = 0;
    private static $names = ["Deimas", "Fobas"];
    private  $name;

    public static function  sukurtiPalydova()
    {
        $kiekSukurtaPalydovu = count(self::$sukurtiObjektai);
        if ($kiekSukurtaPalydovu < count(self::$names)) {
            
            return self::$sukurtiObjektai[] = new self(self::$names[$kiekSukurtaPalydovu]);
        } else {
            return self::$sukurtiObjektai[rand(0, count(self::$sukurtiObjektai)-1)];
        }
    }


    private function __construct($name)
    {
        $this->name = $name;
  
        //$this tai konkreciai tas sukurtas objektas, o self::$sukurti... , naudojam self, nes statine savybe
    }
 
    public function getName()
    {
        return $this->name;
    }
}
