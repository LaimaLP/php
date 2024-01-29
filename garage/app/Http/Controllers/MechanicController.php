<?php

namespace App\Http\Controllers;

use App\Models\Mechanic;
use App\Http\Requests\StoreMechanicRequest;
use App\Http\Requests\UpdateMechanicRequest;

class MechanicController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
     {
         $this->middleware('auth');
     }
 



    public function index()
    { //visi mechanikai yra Mechanic modelyje(statinis metodas all)
        $mechanics = Mechanic::all(); //gauname visus mechanikus, grazina laravelio KOLEKCIJA
        //bukiausiu atveju kolekcija kaip  masyvas, masyvas php yra plokscias primityvas, Masyvas, kuris turi savyje metodu, su kuriais galime zaisti
      
        return view(
            'mechanics.index',
            [
                'mechanics' => $mechanics,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mechanics.create'); //nurodomas kelias
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMechanicRequest $request)
    {
        //sukuriam nauja modeli, mechanika
        Mechanic::create($request->all()); //imam visus duomenis, nevaliduotus
        //po to keliaujam i mechanic index'a.
        return redirect()->route('mechanics-index');
    }






    /**
     * Display the specified resource.
     */
    public function show(Mechanic $mechanic)
    {
        return view(
            'mechanics.show',
            [
                'mechanic' => $mechanic,
            ]);





    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mechanic $mechanic)
    {

        return view(
            'mechanics.edit',
            [
                'mechanic' => $mechanic,
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMechanicRequest $request, Mechanic $mechanic)
    {
        $mechanic->update($request->all());

        return redirect()->route('mechanics-index');
    }

    /*Confrom remove the specified resource from storage*/

    public function delete(Mechanic $mechanic) //cia po kapotu susiranda ta id, skart grazina ta mechaniko modeli kuri reikia
    {

        return view(
            'mechanics.delete',
            [
                'mechanic' => $mechanic,
            ]
        );
    }

    



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mechanic $mechanic)
    {
        $mechanic->delete();

        return redirect()->route('mechanics-index');
    }
}
