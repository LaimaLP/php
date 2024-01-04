<?php
/*vaikas gali extendinti tik viena klase, nes gali tureti tik viena teva */
class Dramblys extends ManoAfrika {

    public $pavadinimas = 'Dramblys';
    public $spalva = 'pilkas';
    public $svoris = 'nezinomas'; // dar nepasverem
    public $socialinisTinklas = 'Instagram';

    public function __construct() {
        echo 'Hello, Dramblys' . '<br>';
    }


}