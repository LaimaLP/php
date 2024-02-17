<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Mechanic;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMechanicRequest;
use App\Http\Requests\UpdateMechanicRequest;

class MechanicController extends Controller
{



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
                        $query->orWhere('name', 'like', '%' . $keywords[$index] . '%')
                            ->where('surname', 'like', '%' . $keywords[1 - $index] . '%');
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
        
        $mechanicId = Mechanic::create($request->all())->id;

        if ($request->photos) {
            foreach ($request->photos as $photo) {
                $originalName = $photo->getClientOriginalName();
                $namePrefix = time();
                $originalName = "{$namePrefix}-{$originalName}";
                $photo->move(public_path().'/img/', $originalName);
                Photo::create([
                    'mechanic_id' => $mechanicId,
                    'path' => $originalName,
                ]);
            }
        }


        return redirect()->route('mechanics-index')->with('ok', 'Štai ir naujas mechanikas!');
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

        $mechanicPhotosIds = $mechanic->photos->pluck('id')->toArray();
        $photosIds = $request->photo_id ? $request->photo_id : [];
        $toDelete = array_diff($mechanicPhotosIds, $photosIds);
        $photoFilesIndexes = array_keys($request->photos ?? []);
        $photoIdsIndexes = array_keys($request->photo_id ?? []);
        $toOvewrite = array_intersect($photoFilesIndexes, $photoIdsIndexes);
        $newPhotos = array_diff($photoFilesIndexes, $photoIdsIndexes);

        if ($toDelete) {
            foreach ($toDelete as $photoId) {
                $photo = Photo::find($photoId);
                $photo->delete();
                $path = public_path().'/img/'.$photo->path;
                if (file_exists($path)) {
                    unlink($path);
                }
            }
        }
        if ($toOvewrite) {
            foreach ($toOvewrite as $index) {
                $photo = Photo::find($request->photo_id[$index]);

                $path = public_path().'/img/'.$photo->path; //be sito pasilieka servery ir pakeista nuotrauka tik jos nerodo, tai dabar ir kelia istrinam ir nuotrauka
                if (file_exists($path)) {
                    unlink($path);
                }



                $originalName = $request->photos[$index]->getClientOriginalName();
                $namePrefix = time();
                $originalName = "{$namePrefix}-{$originalName}";
                $request->photos[$index]->move(public_path().'/img/', $originalName);
                $photo->update([
                    'path' => $originalName,
                ]);
            }
        }
        if ($newPhotos) {
            foreach ($newPhotos as $index) {
                $originalName = $request->photos[$index]->getClientOriginalName();
                $namePrefix = time();
                $originalName = "{$namePrefix}-{$originalName}";
                $request->photos[$index]->move(public_path().'/img/', $originalName);
                Photo::create([
                    'mechanic_id' => $mechanic->id,
                    'path' => $originalName,
                ]);
            }
        }

        return redirect()->route('mechanics-index')->with('ok', 'Mechaniko duomenys dabar jau pakeisti.');
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

        return redirect()->route('mechanics-index')->with('info', 'Mechanikas atleistas');
    }
}
