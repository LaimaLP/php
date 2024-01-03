<?php
/*vaikas gali extendinti tik viena klase, nes gali tureti tik viena teva */
class Dramblys extends Afrika{
    public $pavadinimas = 'Dramblys';
    public $splava = 'pilkas';
    public $svoris = 'nezinomas';

    public function __construct(){
        echo 'Hello, Dramblys <br>';
    }
}
