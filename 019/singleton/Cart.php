<?php
/*pvz kai static metodas kontroliuoja krepselio obj sukurima:
objekto dar nera, o daryt jau reikia;*/
class Cart
{
    private static $cartObject; //pradzioj jis yra nullas, nepriskirtas

    //naudojam statini metoda
    public static function getCart()
    {
       // return new self; (taip naudodami static metoda galetume sukurti objektus), taip gaunami vistiek du obj, ar daugiau, kiek nori;
       // toliau susikuriam private static savybe $cartObject, kuri pradzioj yra null. Kai pirma karta kreipiasi, $cartObject buna null
       // ir kuomet nullas, tuomet daro kas po ?? grazina ir dar priskyrima padaro, tuomet kreipiantis antra karta
       // jau buna nebe null ir naudoja ta priskirta objekta. Realiai pirmasis kreipdamasis sukuria objekta, o kai kiti kreipiasi
       // tai jau gauna to objekto kopijas.
        return self::$cartObject ?? self::$cartObject = new self;
    }

     /*kontruktorius privatus, taip uzdraudziam susikurti obj su new. 
        Constructas pasiekiamas tik is klases vidaus. */
    private function __construct(){}

//uzdraudziame klonuoti objekta
    private function __clone(){ }

    private function __wakeup(){ }

  // sitas nenaudojamas, geriau ir nedeti, kitu tikslu naudojam serialize:
    private function __serialize(){ }

    //wake up sukuria, bet warning duoda, o serialize nesukuria ir warning
    //sito nenaudojam nes dedant i DB serializuojam, kitais atvejais naudojam, ne baninant.
    // private function __serialize(){

    // }
}
