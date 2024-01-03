<?php
//magic metodai, jo specialiai nereikia paleidineti:
/* 1. __constructor;
    2. __get
*/

/* kai savybe idedame i private, tuomet neleidziam programeriui jos modifikuoti, jis gali prie jos prieiti per public f-ja, 
taciau negali pakeisti. Kad netycia nepridarytu nesamoniu*/
class Bebras {

    public $spalva = 'ruda';
    private $svoris = 'nezinomas'; // dar nepasverem
    private $ugis = 1.0; // metrais

//magic method get
/*  leidzia kreiptis i nematoma ar net neegzsituojancia savybe ir grazina result. Kintamojo kintamasis. pasirasom tam tikrais propsais, kad duotum to ko mums reikia
galim sufeikinti kintamuosius, net jam nesant galim prirasyti ir priskirti */
 
public function __construct(){
    echo '<br> Bebras atejo <br>';
}
public function __desstruct(){
    echo '<br> Bebras isejo <br>';
}


//nurodo, ka man reikia i obj sudeti
public function __serialize():array{
    return [
        'ugis'=>$this->ugis,
        'svoris'=>$this->svoris
    ];
}



public function __get($prop) {

        return match($prop) {
            'ugis' => $this->ugis . ' metrai',
            'svoris' => $this->svoris . ' kg',
            'uodega' => $this->kokiaUodega(),
            default => null
        };
        
    }

    private function kokiaUodega() {
        return 'uodega: ' . rand(20, 30) . ' cm';
    }

    // getter'is (kur kazka gaunam, pasiziurim)
    public function koksSvoris() {
        return $this->svoris;
    }

    // setter'is
    /* perimam kontrole, ribojam, kad nesugadintu to kuom leidziam naudotis */
    public function duotiMaisto($kg) {
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

    public function pasverti() {
        $this->svoris = rand(5, 45);
    }
}