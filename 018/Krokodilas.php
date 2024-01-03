<?php

class Krokodilas extends Afrika{
    public $pavadinimas = 'Krokodilas';
    public $splava = 'zalias';
    public $svoris = 'nezinomas';


    public function padainuok(){
        echo "Krokodilas dainuoja". '<br>';
        parent::padainuok();
    }
    public function __construct(){
        parent::__construct();
        echo 'Hello, Krokodilas' . '<br>';
        $this->mano;
    }
}
