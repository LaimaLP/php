<?php


class Afrika {

    public $zemynas = 'Afrika';
    public $gyventojai = 1000000000;
    public $socialinisTinklas = 'Facebook';

    protected $mano = 'Stebuklas';

    public function __construct() {
        echo 'Hello, Afrika' . '<br>';
    }

    public function padainuok() {
        echo 'La la la' . '<br>';
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
