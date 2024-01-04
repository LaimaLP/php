<?php

class Kibiras3{
    private $akmenuKiekis = 0;

    public function prideti1Akmeni()
    {
        return $this->akmenuKiekis+=1;
    }

    public    function pridetiDaugAkmenu($kiekis)
    {
        return $this->akmenuKiekis += $kiekis;
    }
    public    function kiekPririnktaAkmenu()
    {
        return $this->akmenuKiekis;
    }
    protected function updateAkmenuKiekis($kiekis){
        $this->akmenuKiekis+=$kiekis;
    }
}