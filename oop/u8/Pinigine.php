<?php

class Pinigine{

    private $popieriniaiPinigai = 0;
    private $metaliniaiPinigai = 0;
     private $monetuKiekis = 0;
    private $popieriniuKiekis = 0;

    public function ideti($kiekis)
    {
        if ($kiekis <= 2) {
            $this->metaliniaiPinigai += $kiekis;
            $this->monetuKiekis++;
        } else {
            $this->popieriniaiPinigai += $kiekis;
            $this->popieriniuKiekis++;
        }
    }
    public function skaiciuoti()
    {
        return ($this->metaliniaiPinigai + $this->popieriniaiPinigai);
    }

    public function monetos()
    {
        return $this->monetuKiekis;
    }

    public function banknotai()
    {
        return $this->popieriniuKiekis;
    }
}
