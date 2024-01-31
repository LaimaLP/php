<?php

namespace App\Http\Controllers;

use App\Models\Truck;
use App\Models\Mechanic;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTruckRequest;
use App\Http\Requests\UpdateTruckRequest;

class TruckController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {


        //         $truck = Truck::where('mechanic_id', 1)->first();


        // //   dump($truck);
        //   dd($truck->mechanic); //duoda galutini rezultata modeli
        //   dd($truck->mechanic()); //galim pricheininti dalyku





        $sorts = Truck::getSorts();
        $sortBy = $request->query('sort', '');
        $perPageSelect = Truck::getPerPageSelect();
        $perPage = (int) $request->query('per_page', 0);

        $trucks = Truck::query();

        $trucks = match ($sortBy) {
            'model_asc' => $trucks->orderBy('brand'),
            'model_desc' => $trucks->orderByDesc('brand'),
            default => $trucks
        };

        if ($perPage > 0) {
            $trucks = $trucks->paginate($perPage)->withQueryString();
        } else {
            $trucks = $trucks->get();
        }

        return view('trucks.index', [
            'trucks' => $trucks,
            'sorts' => $sorts,
            'sortBy' => $sortBy,
            'perPageSelect' => $perPageSelect,
            'perPage' => $perPage,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $trucks = Mechanic::all();

        return view('trucks.create', [
            'mechanics' => $trucks,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTruckRequest $request)
    {
        Truck::create($request->all()); //imam visus duomenis, nevaliduotus
        //po to keliaujam i mechanic index'a.
        return redirect()->route('trucks-index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Truck $truck)
    {
        return view(
            'trucks.show',
            [
                'truck' => $truck,
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Truck $truck)
    {
        $mechanics = Mechanic::all();

        return view('trucks.edit', [
            'truck' => $truck,
            'mechanics' => $mechanics,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTruckRequest $request, Truck $truck)
    {
        $truck->update($request->all());

        return redirect()->route('trucks-index');
    }




    public function delete(Truck $truck) //cia po kapotu susiranda ta id, skart grazina ta mechaniko modeli kuri reikia
    {

        return view(
            'trucks.delete',
            [
                'truck' => $truck,
            ]
        );
    }





    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Truck $truck)
    {
        $truck->delete();

        return redirect()->route('trucks-index');
    }
}
