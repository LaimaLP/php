<?php

namespace App\Http\Controllers;

use App\Models\Mechanic;
use Illuminate\Http\Request;
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




    public function index(Request $request)
    { //visi mechanikai yra Mechanic modelyje(statinis metodas all)
        // $mechanics = Mechanic::all()->orderBy('surname', 'desc')->get();  //duomenu bazes rusiavimas

        //gauname visus mechanikus, grazina laravelio KOLEKCIJA
        //bukiausiu atveju kolekcija kaip  masyvas, masyvas php yra plokscias primityvas, Masyvas, kuris turi savyje metodu, su kuriais galime zaisti
        // $mechanics = Mechanic::all()->sortByDesc('surname'); //kolekcijos rusiavimas, nereikia uzbaigimo su get(), ta padaro jau kai kreipiames su all()  



        //sortBy - metodas kolekcijai rusiuoti, o orderBy - duommenu bazei
        // ::orderBy('surname')->get(); norim gauti resultata. baigesi uzklausa i db ir prasom rezultato su get() - duok;







        $sorts = Mechanic::getSorts();
        $sortBy = $request->query('sort', ''); //i query metoda pirmaissi kaip parametras eina key, ko ieskome, grazina to key value, o antrasis parametras defaultinis, jei nebutu kad butu
       
        $perPageSelect = Mechanic::getPerPageSelect();
        $perPage = (int)$request->query('per_page', 0);
        $s = $request->query('s', '');

        $mechanics = Mechanic::query();


        if ($s) {
            $keywords = explode(' ', $s);
            if (count($keywords) > 1) {
                $mechanics = $mechanics->where(function ($query) use ($keywords) {
                    foreach (range(0, 1) as $index) {
                        $query->orWhere('name', 'like', '%'.$keywords[$index].'%')
                        ->where('surname', 'like', '%'.$keywords[1 - $index].'%');
                    }
                });
            } else {
                $mechanics = $mechanics
                    ->where('name', 'like', "%{$s}%")
                    ->orWhere('surname', 'like', "%{$s}%");
            }
        }


        $mechanics = match ($sortBy) {
            'name_asc' => $mechanics->orderBy('surname'),
            'name_desc' => $mechanics->orderByDesc('surname'),
            'truck_count_asc' => $mechanics->withCount('trucks')->orderBy('trucks_count'),
            'truck_count_desc' => $mechanics->withCount('trucks')->orderByDesc('trucks_count'),
            default => $mechanics,
        };


        if ($perPage > 0) {
            $mechanics = $mechanics->paginate($perPage)->withQueryString(); //pridedam kad sektu query, einant per puslapius zinotu pagal ka buvo sortinta, persikrovus psl
        } else {
            $mechanics = $mechanics->get();
        };



        return view(
            'mechanics.index',
            [
                'mechanics' => $mechanics,
                'sorts' => $sorts,
                'sortBy' => $sortBy,
                'perPageSelect' => $perPageSelect,
                'perPage' => $perPage,
                's' => $s,
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
            ]
        );
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
