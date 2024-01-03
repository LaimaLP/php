<?php

class Afrika{
    public $zemynas = 'Afrika';
    public $gyventojai = 10000000;

    protected $mano ='protected cia';

    public function padainuok(){
        echo "lalalalala";
    }
    public function __construct(){
        echo 'Hello, Africa <br>';
    }
}
/*  
    1. private (stalcius) nepaveldimi, protected (butas) pasiveldi, jo isoreje nematome, negalime pasikreipti
    2. Overwritinimas galimas; 
    3. paveldimi metodai ir properciai;
    4. PHP'e nera overload'o. (kitose kalbose: kai viena klase gali tureti 2-3 metodus tuo paciu vardu, 
        paduodami skirtingos rusies argumentai, pagal tai zino, kuris metodas turi veikti.
        kompeliuojamose kalbose yra overloadas.);
*/
