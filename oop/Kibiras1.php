<?php

class Kibiras1{
    private $akmenuKiekis = 0;

    public function prideti1Akmeni()
    {
        return $this->akmenuKiekis+=1;
    }

    public    function pridetiDaugAkmenu($kiekis){
        if(!is_integer($kiekis)){
            return;
        }
        if($kiekis<0){
            return;
        }
        return $this->akmenuKiekis += $kiekis;
    }
    public    function kiekPririnktaAkmenu(){
        return $this->akmenuKiekis;
    }
}
