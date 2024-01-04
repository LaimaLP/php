<?php
class Stikline{
    private $turis;
    private $kiekis=0;

    public function __construct($turis) {
        $this->turis = $turis;
    }
    public function ipilti($kiekis){
         return $this->kiekis =  min($kiekis, $this->turis);
    }
    public function ispilti(){
        $kiekis =  $this->kiekis;
        $this->kiekis = 0;
        return $kiekis;
    }
}