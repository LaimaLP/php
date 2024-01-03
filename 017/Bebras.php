<?php
//magic metodai, jo specialiai nereikia paleidineti:
/* 1. __constructor;
    2. __get
*/

/* kai savybe idedame i private, tuomet neleidziam programeriui jos modifikuoti, jis gali prie jos prieiti per public f-ja, 
taciau negali pakeisti. Kad netycia nepridarytu nesamoniu*/
class Bebras
{

    public $spalva = 'ruda';
    private $svoris = 'nezinomas'; // dar nepasverem
    private $ugis = 1.0; // metrais

    //magic method get
    /*  leidzia kreiptis i nematoma ar net neegzsituojancia savybe ir grazina result. Kintamojo kintamasis. pasirasom tam tikrais propsais, kad duotum to ko mums reikia
galim sufeikinti kintamuosius, net jam nesant galim prirasyti ir priskirti */

    public function __construct()
    {
        echo '<br> Bebras atejo <br>';
    }


    //destructo metodas pasileidzia kai unsetintu kintamaji arba kai viskas mirsta, baigiasi scriptas; 
    //realiai kuomet fiziskai kintamasis yra pasalinamas is atminties
    //negali tureti kintamuju, nes nera kaip ju perduoti, o constructas gali
    public function __destruct()
    {
        echo '<br> Bebras isejo <br>';
    }


    //nurodo, ka man reikia i obj sudeti
    public function __serialize(): array
    {
        return [
            'ugis' => $this->ugis,
            'svoris' => $this->svoris
        ];
    }
    public function __unserialize(array $data): void
    {
        $this->ugis = $data['ugis'];
        $this->svoris = $data['svoris'];
    }

    //GETERIS
    public function __get($prop)
    {

        return match ($prop) {
            'ugis' => $this->ugis . ' metrai',
            'svoris' => $this->svoris . ' kg',
            'uodega' => $this->kokiaUodega(),
            default => null
        };
    }
    public function __toString(): string
    {
        return "<br> Bebras splavos: $this->spalva, ugis: $this->ugis, svoris: $this->svoris <br>";
    }


    public function __invoke()
    {
        echo '<br> Bebras sako: <br>';
        echo 'Labas <br>';
    }


    //SETERIS (reikia dvieju param) kad galetume kontroliuoti ivedamas reiksmes; kad stipriai nepakeistu ir nesugadintu algoritmu
    public function __set($prop, $val)
    {

        if ($prop == 'ugis')
            if ($val < 0.8 || $val > 1.0) {
                echo 'Blogai ivestas ugis';
                return;
            }
        $this->ugis = $val;
    }


    private function kokiaUodega()
    {
        return 'uodega: ' . rand(20, 30) . ' cm';
    }

    // getter'is (kur kazka gaunam, pasiziurim)
    public function koksSvoris()
    {
        return $this->svoris;
    }

    // setter'is
    /* perimam kontrole, ribojam, kad nesugadintu to kuom leidziam naudotis */
    public function duotiMaisto($kg)
    {
        if ($kg > 5) {
            echo 'Per daug <br>';
            return;
        }
        if ($kg < 0.1) {
            echo 'Per mazai <br>';
            return;
        }
        if ($kg + $this->svoris > 45) {
            echo 'Bebras jau storas <br>';
            return;
        }
        echo 'Bebras pašertas <br>';
        $this->svoris = $this->svoris + $kg;
    }

    public function pasverti()
    {
        $this->svoris = rand(5, 45);
    }
}
