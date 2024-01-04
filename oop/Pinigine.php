<?php

class Pinigine{
    private $popieriniaiPinigai=0;
    private $metaliniaiPinigai=0;
    public function ideti($kiekis){
        if ($kiekis <= 2) {
            $this->metaliniaiPinigai += $kiekis;
        } else {
            $this->popieriniaiPinigai += $kiekis;
        }
    }
    public function skaiciuoti(){
        return ($this->metaliniaiPinigai + $this->popieriniaiPinigai);
    }
}
