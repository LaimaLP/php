<?php

class Pinigine
{
    private $popieriniaiPinigai;

    private $metaliniaiPinigai;

    public function ideti($kiekis)
    {
        if ($kiekis <= 2) {
            $this->metaliniaiPinigai += $kiekis;
        } else {
            $this->popieriniaiPinigai += $kiekis;
        }
    }

    public function skaiciuoti()
    {
        return ($this->metaliniaiPinigai + $this->popieriniaiPinigai);
    }
}
