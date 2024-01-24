<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForestController extends Controller
{
    public function labas(Request $request, $color1, $size)
    {               //bleido pavadinimas, ir nurodom kokius kintamuosius perduodame
        return view('bebras', [
            'color' => $color1,
            'size' => $size,
            'word' => $request->a
        ]);
    }





    public function showCount()
    {
        // $result = session('result', 0); (kuomet i sesija put, pasiimti galim sitaip)
        // $result = session()->get('result', ''); (kitas variantas, pasigetinti)

        //pull'inam. Ja istraukiam ir nebelieka
        $result = session()->pull('result', '');




//einam i folderi counter ir i count(naudojama vietoj /)
        return view('counter.count', [
            'result' => $result //perduodam rezultata
        ]);
    }

    /* Countindami iputinam rezultata i sesija, redirectinames, pasiimam rezultata, jeigu nera, gaunam tuscia, ir rezultata idedame i count blade jau per => */

    public function count(Request $request)
    {
        $count1 = $request->count1;
        $count2 = $request->count2;

        $result = $count1 + $count2;

        //  session['result'=>$result]; helperio funkcija sesija, i sesija irasom rezultata
        // session()->put('result', $result); kitas variantas iputinam ()
        // sesssion()->flash(); dar galima ir flashinti
        // $request->session()->flash('result',$result); sesija galim pasiimti is requesto

        return redirect()->route('count')->with('result', $result); //zinuciu rodymui sita naudoti, pvz po irasymo: redirectinam i count'a su tokiu rezultatu. Populiariausias
    }









    public function showSquares()
    {
        $count = session()->get('squares', 0);
        $squares = $count ? range(1, $count) : []; //jeigu countas yra, tuomet rangeas, jei nera, tuomet tuscias masyvas

        return view('sq.show', [
            'count' => $count,
            'squares' => $squares
        ]);
    }


    public function squares(Request $request)
    {
     if(session()->get('squares', 0) >0){
        return redirect()->route('squares');
     }

        $count  = $request->count ?? 0;

        session()->put('squares', $count); //i sesija iputinam

        return redirect()->route('squares');
    }

    public function addSquares(Request $request)
    {

        $count  = $request->count ?? 0;
        $was = session()->get('squares', 0);
        $count += $was;

        session()->put('squares', $count); //ir cia i sesija iputnam
      
        return redirect()->route('squares');
    }


    public function clearSquares()
    {

        session()->forget('squares');


        return redirect()->route('squares');
    }
}
