<?php

class Tv
{
//kintamasis, kuris neiseina is klases iki objekto yra static. Kintamasis priristas prie klases;
//turi tuos pacius tris matomumus(public, private, protected);
//statiniai ir metodai buna
    static public $kanalai = ['TV3', 'LNK', 'LRT', 'Polonia1'];
    static private $visiTelevizoriai = [];

    public $gamintojas;
    public $savininkas;
    private $kanalas = 'nenjustatytas';

//static metoduose this neturi prasmes, naudojame self
    static public function keistiKanalus($naujiKanalai)
    {
        self::$kanalai = $naujiKanalai;

        foreach (self::$visiTelevizoriai as $tv) {
            echo 'Keiciam kanalus televizoriui ' . $tv->gamintojas . '<br>';
        }
    }
    //statiniame metode negali buti this : Cannot use '$this' in non-object context
    public function __construct($gamintojas, $savininkas)
    {
        $this->gamintojas = $gamintojas;
        $this->savininkas = $savininkas;
        self::$visiTelevizoriai[] = $this;
        //kai parduodam, i televizorius idedm televizoriaus objekta
    }
    public function perjungtiPrograma($kanaloNumeris)
    {
        //vietoj this - televizijos klaseje esantis kintamasis, jau su $, self pati klase
        //kintamasisi priristas prie klases, this nebetinka, nes i obj nenuejo kanalai, todel ir this neveikia, nurodom kad tai sios klases TV kanalai.
       //self == pati klase
        if ($kanaloNumeris < 1 || $kanaloNumeris > count(self::$kanalai)) {
            return;
        }
        $this->kanalas = self::$kanalai[$kanaloNumeris - 1];
    }
    public function kaRodo()
    {
        echo $this->savininkas . ' siuo metu ziuri ' . $this->kanalas . ' per ' . $this->gamintojas . ' televizoriu <br>';
    }


//is savo teliko pakeiti kitiems kanalus
    public function hack($ka)
    {
        foreach (self::$visiTelevizoriai as $tv) {
            if ($tv->savininkas == $ka) {
                $tv->kanalas = 'HACKED';
            }
        }
    }
}



//STatic'as reikalingas dviem atvejais:

//1.kai tau reikia kažkokios info, kuria dalintusi visi objektai, sukurti iš tos klasės ( /kai tarp objektu yra kazkas bendro - tada reikia static)
//2.kai is klases norim kazka gauti, bet objekto dar neturim;
