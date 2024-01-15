<?php
namespace Colors\App\Controllers;

use Colors\App\App;
use App\DB\FileBase;

class ColorController {

    public function index() {

        $writer = new FileBase('colors'); //1. sukuriame irasinetojo faila - objekta, pasileidzia konstruktorius is FileBase klases >> sugeneruojami du failai json ir -index.json
        //po tai kai susikuria objekta, writeris jau turi nusiskaites indeksa ir data(is constructorio).
        $colors = $writer->showAll(); //tuomet tame sukurtame obj paleidziam showAll metoda ir perduodamas result i $colors (metodas aprasytas FileBase)

        //tuomet paleidziamas templatas ->colors/index . tam failui perduodami du kintamieji:title ir colors. colors foreachina datai renderinti
        return App::view('colors/index', [
            'title' => 'All colors',
            'colors' => $colors
        ]);
    }
    
    
    public function create() {
//cia perduoda tik title ir uzkrauna colors/create tempplate, atidaromas colors/create.php
        return App::view('colors/create', [
            'title' => 'Create new color'
        ]);
    }

    public function store($request) {
//cia atkeliauja is POST masyvo
//i $color idedam kas ateina is color ...
        $color = $request['color'] ?? null;
        $size = $request['size'] ?? null;
//vel sukuriamas failo writeris ... ir istorija kartojasi, sukuria konstruktoriu
        $writer = new FileBase('colors'); //sukuriamas naujas obj
        //leidziamas metodas create (is FileBase)
        $writer->create((object) [
            'color' => $color,
            'size' => $size
            //cia jei reiktu, galime pasiimti ir ID
        ]);
//po irasymo returnina atgal i colors (ten kur all colors, colors/index.php)
        return App::redirect('colors');
//kai baigiam darba pasileidzia destructorius >>(FileBase)
    }

}