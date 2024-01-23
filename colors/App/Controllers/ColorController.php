<?php

namespace Colors\App\Controllers;

use Colors\App\App;
use App\DB\FileBase;
use Colors\App\Message;
use App\DB\MariaBase;
use Colors\App\Requests\ColorStoreRequest;

class ColorController
{

    public function index($request)
    {

        // $writer = new FileBase('colors'); //1. sukuriame irasinetojo faila - objekta, pasileidzia konstruktorius is FileBase klases >> sugeneruojami du failai json ir -index.json
        //po tai kai susikuria objekta, writeris jau turi nusiskaites indeksa ir data(is constructorio).
       
       
        $writer = match(DB) {
            'file' => new FileBase('colors'),
            'maria' => new MariaBase('colors'),
        };
      
      
      
      
        $colors = $writer->showAll(); //tuomet tame sukurtame obj paleidziam showAll metoda ir perduodamas result i $colors (metodas aprasytas FileBase)



        $sort = $request['sort'] ?? null;

        if ($sort == 'size-asc') {
            usort($colors, fn ($a, $b) => $a->size <=> $b->size);
            $sortValue = 'size-desc';
        } elseif ($sort == 'size-desc') {
            usort($colors, fn ($a, $b) => $b->size <=> $a->size);
            $sortValue = 'size-asc';
        } else {
            $sortValue = 'size-asc';
        }





        //tuomet paleidziamas templatas ->colors/index . tam failui perduodami du kintamieji:title ir colors. colors foreachina datai renderinti
        return App::view('colors/index', [
            'title' => 'All colors',
            'colors' => $colors,
            'sortValue' => $sortValue
        ]);
    }


    public function create()
    {
        //cia perduoda tik title ir uzkrauna colors/create tempplate, atidaromas colors/create.php
        return App::view('colors/create', [
            'title' => 'Create new color'
        ]);
    }

    public function store($request)
    {


      if(!ColorStoreRequest::validate($request)){
        return App::redirect('colors/create');
      }




        //cia atkeliauja is POST masyvo
        //i $color idedam kas ateina is color ...
        $color = $request['color'] ?? null;
        $size = $request['size'] ?? null;
        $colorTrim = ltrim($color, '#');

        // curl to color API here 
        $curl = curl_init(); //curlas - instaliuota biblioteka-sukuria objekta(vidini). konfiguruojam toliau ji
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://www.thecolorapi.com/id?hex=$colorTrim", //kur reikes eiti
            CURLOPT_RETURNTRANSFER => true, // ar laukti atsakymo
            CURLOPT_TIMEOUT => 30, //kiek s laukti atsakymo, timeout
        ]);

        // $response = curl_exec($curl); //svarbiausia eilute. curl_exec yra kreipimasis, is serverio ateina ats i kintamaji response, ten isidedam. Gali trukti iki 30s
        $response = curl_exec($curl);
      
        //erroro handlinimas
        if ( $response === false) {
            echo 'Curl error: ' . curl_error($curl);
            die;
        } else {
            $response = json_decode($response); //response lieka atsakymas, dekoduojamae i objektus ir is ten issimame color name
            $colorName = $response->name->value;
        }
      


        curl_close($curl); //kai sulaukiam atsakymo, uzdarymom


        //vel sukuriamas failo writeris ... ir istorija kartojasi, sukuria konstruktoriu
        // $writer = new FileBase('colors'); //sukuriamas naujas obj

        $writer = match(DB) {
            'file' => new FileBase('colors'),
            'maria' => new MariaBase('colors'),
        };



        //leidziamas metodas create (is FileBase)
        $writer->create((object) [
            'color' => $color,
            'size' => $size,
            'name'=> $colorName ?? 'unknown'
            //cia jei reiktu, galime pasiimti ir ID
        ]);
        //po irasymo returnina atgal i colors (ten kur all colors, colors/index.php)
       
       
       Message::get()->Set('succes', 'Color was created');
       
        return App::redirect('colors');
        //kai baigiam darba pasileidzia destructorius >>(FileBase)
    }

    public function destroy($id)
    {

        // $writer = new FileBase('colors');

        $writer = match(DB) {
            'file' => new FileBase('colors'),
            'maria' => new MariaBase('colors'),
        };


        $writer->delete($id);


        Message::get()->set('info', 'Color was deleted');



        return App::redirect('colors');
    }

    public function edit($id)
    {

        // $writer = new FileBase('colors');


        $writer = match(DB) {
            'file' => new FileBase('colors'),
            'maria' => new MariaBase('colors'),
        };


        $color = $writer->show($id);

        return App::view('colors/edit', [
            'title' => 'Edit color',
            'color' => $color
        ]);
    }

    public function update($id, $request)
    {


        $color = $request['color'] ?? null;
        $size = $request['size'] ?? null;

        $colorTrim = ltrim($color, '#');

        // curl to color API here 
        $curl = curl_init(); //f-ja sukuria objekta(vidini). konfiguruojam toliau ji
        var_dump($curl);
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://www.thecolorapi.com/id?hex=$colorTrim", //kur reikes eiti
            CURLOPT_RETURNTRANSFER => true, // ar laukti atsakymo

            CURLOPT_TIMEOUT => 30, //kiek s laukti atsakymo, timeout
        ]);
        // $response = curl_exec($curl); //svarbiausia eilute. kreipimasis, is serverio ateina ats i kintamaji response. Gali trukti iki 30s

        ($response = curl_exec($curl)) ;
        //erroro handlinimas
        if ( $response === false) {
            echo 'Curl error: ' . curl_error($curl);
            die;
        } else {
            $response = json_decode($response); //response lieka atsakymas, dekoduojamae i objektus ir is ten issimame color name
            $colorName = $response->name->value;
        }


        curl_close($curl); //uzdarymas


        // $writer = new FileBase('colors');


        $writer = match(DB) {
            'file' => new FileBase('colors'),
            'maria' => new MariaBase('colors'),
        };

        
        $writer->update($id, (object) [
            'color' => $color,
            'size' => $size,
            'name' => $colorName ?? 'unknown'
        ]);

        Message::get()->set('success', 'Color was updated');

        return App::redirect('colors');
    }
}
