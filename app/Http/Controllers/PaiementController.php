<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paiement;
use App\Models\Pointage;
use App\Models\Personnel;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;

class PaiementController extends Controller
{
    // Méthode pour afficher la liste des paiements
    public function index()
    {
        $paiements = Paiement::all();
       // $personnels = Paiement::all();
        return view('paiements.index', compact('paiements'));
    }

    // Méthode pour afficher le formulaire de création d'un paiement
    public function create()
    {
        $pointages = Pointage::all();
        $personnels = Personnel::all();
        return view('paiements.create', compact('personnels'));
    }

    // Méthode pour enregistrer un nouveau paiement
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'personnel_id' => 'required|exists:personnels,id',
            'date_paiement' => 'required|date|after_or_equal:today',
            'montant' => 'required|numeric|min:0',
        ]);

        // Création du paiement
        $paiement = new Paiement([
            'personnel_id' => $request->personnel_id,
            'date_paiement' => $request->date_paiement,
            'montant' => $request->montant,
        ]);
        $paiement->save();

        // Redirection avec un message de succès
        return redirect()->route('admin/paiements')->with('success', 'Paiement effectué avec succès.');
    }

    // Méthode pour générer un bulletin de salaire en PDF
    // public function generatePDF($id)
    // {
    //     $paiement = Paiement::findOrFail($id);

    //     // Calcul du salaire quotidien en fonction des heures travaillées
    //     $heureDebutTravail = Carbon::parse($paiement->date_paiement)->startOfDay()->addHours(8);
    //     $heureFinTravail = Carbon::parse($paiement->date_paiement)->startOfDay()->addHours(17);
    //     $heuresTravaillees = Pointage::where('personnel_id', $paiement->personnel_id)
    //         ->where('date', $paiement->date_paiement)
    //         ->whereBetween('heure_arrivee', [$heureDebutTravail, $heureFinTravail])
    //         ->count();

    //     $cjm = $paiement->personnel->cjm;
    //     $salaireQuotidien = ($heuresTravaillees * $cjm) / 8;

    //     // Génération du PDF avec les données du paiement et du salaire
    //     $pdf = PDF::loadView('paiements.bulletin', compact('paiement', 'salaireQuotidien'));
    //     return $pdf->download('bulletin_salaire.pdf');
    // }
    
    
    // public function generatePDF($id)
    // {
    //     $paiement = Paiement::findOrFail($id);
    //     // Génération du PDF avec les données du paiement et du salaire
    //     $pdf = PDF::loadView('paiements.bulletin', compact('paiement'));
    //     return $pdf->download('bulletin_salaire.pdf');
    // }
    
    // public function generatePDF($id)
    // {
    //     $paiement = Paiement::findOrFail($id);
    
    //     // Calcul du salaire quotidien en fonction des heures travaillées
    //     $heureDebutTravail = Carbon::parse($paiement->date_paiement)->startOfDay()->addHours(8);
    //     $heureFinTravail = Carbon::parse($paiement->date_paiement)->startOfDay()->addHours(17);
    //     $pointages = Pointage::where('personnel_id', $paiement->personnel_id)
    //         ->where('date', $paiement->date_paiement)
    //         ->whereBetween('heure_arrivee', [$heureDebutTravail, $heureFinTravail])
    //         ->get();
    
    //     $heuresTravaillees = 0;
    //     foreach ($pointages as $pointage) {
    //         $arrivee = Carbon::parse($pointage->heure_arrivee);
    //         $depart = Carbon::parse($pointage->heure_depart);
    //         $heuresTravaillees += $depart->diffInHours($arrivee);
    //     }
    
    //     $cjm = $paiement->personnel->cjm;
    //     $salaireQuotidien = ($heuresTravaillees * $cjm) / 8;
    
    //     // Génération du PDF avec les données du paiement et du salaire
    //     $pdf = PDF::loadView('paiements.bulletin', compact('paiement', 'salaireQuotidien'));
    //     return $pdf->download('bulletin_salaire.pdf');
    // }


    public function generatePDF($id)
{
    $paiement = Paiement::findOrFail($id);

    // Récupérer tous les pointages pour cet employé
    $pointages = Pointage::where('personnel_id', $paiement->personnel_id)->get();

    $salaireTotal = 0;

    foreach ($pointages as $pointage) {
        // Calcul du salaire quotidien en fonction des heures travaillées
        $heureDebutTravail = Carbon::parse($pointage->heure_arrivee);
        $heureFinTravail = Carbon::parse($pointage->heure_depart);

        $heuresTravaillees = $heureFinTravail->diffInHours($heureDebutTravail);

        $cjm = $paiement->personnel->cjm;
        $salaireQuotidien = ($heuresTravaillees * $cjm) / 8;

        $salaireTotal += $salaireQuotidien;
    }

    // Génération du PDF avec les données du paiement et du salaire
    $pdf = PDF::loadView('paiements.bulletin', compact('paiement', 'salaireTotal'));
    return $pdf->download('bulletin_salaire.pdf');
}

    

    public function show(string $id)
    {
        $paiement = Paiement::findOrFail($id);
 
        return view('paiements.show', compact('paiement'));
    }
    
}
