<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use Illuminate\Http\Request;
use App\Models\Pointage;
use DateTime;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class PointageController extends Controller
{
    public function index()
    {
        $pointages = Pointage::all();
        return view('pointages.index', compact('pointages'));
    }
    public function create()
    {
        $pointages = Pointage::all();
        $personnels = Personnel::all();
        return view('pointages.create', compact('personnels'));
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'personnel_id' => 'required|exists:personnels,id',
    //         'heure_arrivee' => 'required|date_format:Y-m-d\TH:i',
    //         'heure_depart' => 'required|date_format:Y-m-d\TH:i|after:heure_arrivee',
    //     ]);

    //     Pointage::create($request->all());
 
    //     return redirect()->route('pointages')->with('success', 'Personnel pointed successfully');
    // }

    public function store(Request $request)
    {
        $request->validate([
            'personnel_id' => 'required|exists:personnels,id',
            'heure_arrivee' => 'required|date_format:Y-m-d\TH:i',
            'heure_depart' => 'required|date_format:Y-m-d\TH:i|after:heure_arrivee',
        ]);
        // Vérifiez si un enregistrement existe déjà pour ce personnel à cette date
        $existingPointage = Pointage::where('personnel_id', $request->personnel_id)
                                    ->whereDate('heure_arrivee', Carbon::parse($request->heure_arrivee)->format('Y-m-d'))
                                    ->first();

        if ($existingPointage) {
            return redirect()->back()->withErrors(['personnel_id' => 'Le personnel a déjà pointé pour cette date.']);
        }

        Pointage::create($request->all());

        return redirect()->route('pointages')->with('success', 'Personnel pointed successfully');
    }


    public function edit(string $id)
    {
        $pointages = Pointage::findOrFail($id);
        $pointages->heure_arrivee = new DateTime($pointages->heure_arrivee);
        $pointages->heure_depart = $pointages->heure_depart ? new DateTime($pointages->heure_depart) : null;
        $personnels = Personnel::all();
 
        return view('pointages.edit', compact('pointages','personnels'));
    }

    public function update(Request $request, string $id)
    {
            $pointages = Pointage::findOrFail($id);
     
            $pointages->update($request->all());
     
            return redirect()->route('pointages')->with('success', 'Personnel pointed successfully');
    }

    public function show(string $id)
    {
        $pointage = Pointage::findOrFail($id);
 
        return view('pointages.show', compact('pointage'));
    }

    public function destroy(string $id)
    {
        $pointages = Pointage::findOrFail($id);
 
        $pointages->delete();
 
        return redirect()->route('pointages')->with('success', 'Personnel pointed successfully');
    }
}
