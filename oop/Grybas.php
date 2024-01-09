<?php

class Grybas
{
    private $valgomas;
    private $sukirmijes;
    private $svoris;
    public function __construct()
    {
        $this->valgomas = (bool) rand(0, 1);
        $this->sukirmijes = (bool) rand(0, 1);
        $this->svoris = rand(5, 45);
    }

    public function getValgomas()
    {
        return $this->valgomas;
    }

    public function getsukirmijes()
    {
        return $this->sukirmijes;
    }
    public function getsvoris()
    {
        return $this->svoris;
    }
}
