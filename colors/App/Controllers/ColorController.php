<?php
namespace Colors\App\Controllers;

use Colors\App\App;
use App\DB\FileBase;

class ColorController {

    public function index($reques) {

        $writer = new FileBase('colors'); //1. sukuriame irasinetojo faila - objekta, pasileidzia konstruktorius is FileBase klases >> sugeneruojami du failai json ir -index.json
        //po tai kai susikuria objekta, writeris jau turi nusiskaites indeksa ir data(is constructorio).
        $colors = $writer->showAll(); //tuomet tame sukurtame obj paleidziam showAll metoda ir perduodamas result i $colors (metodas aprasytas FileBase)



        $sort = $request['sort'] ?? null;
        if ($sort == 'size-asc') {
            usort($colors, fn($a, $b) => $a->size <=> $b->size);
            $sortValue = 'size-desc'; 
        } elseif($sort == 'size-desc') {
            usort($colors, fn($a, $b) => $b->size <=> $a->size);
            $sortValue = 'size-asc'; 
        } else {
            $sortValue = 'size-asc'; 
        }







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



  // curl to color API here 
  $curl = curl_init();
  curl_setopt_array($curl, [
      CURLOPT_URL => "https://www.thecolorapi.com/id?hex=$color",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
  ]);
  $response = curl_exec($curl);
  curl_close($curl);
  $response = json_decode($response);
  $colorName = $response->name->value;














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

    public function destroy($id) {

        $writer = new FileBase('colors');
        $writer->delete($id);

        return App::redirect('colors');
    }

    public function edit($id) {

        $writer = new FileBase('colors');
        $color = $writer->show($id);

        return App::view('colors/edit', [
            'title' => 'Edit color',
            'color' => $color
        ]);
    }

    public function update($id, $request) {

        $color = $request['color'] ?? null;
        $size = $request['size'] ?? null;

        $writer = new FileBase('colors');
        $writer->update($id, (object) [
            'color' => $color,
            'size' => $size
        ]);

        return App::redirect('colors');
    }


}