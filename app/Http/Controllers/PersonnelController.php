<?php

namespace App\Http\Controllers;

use App\Models\Paiement;
use Illuminate\Http\Request;
use App\Models\Personnel;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PersonnelController extends Controller
{
    //
    public function index()
    {
        $personnel = Personnel::all();
        $user = User::all();
        $paiment = Paiement::all();
        return view('personnels.index', compact('personnel', 'user', 'paiment'));
    }

    public function create()
    {
        return view('personnels.create');
    }

    public function store(Request $request)
    {   

        $request->validate([
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'telephone' => 'required|max:20',
            'cni' => 'required|max:255|unique:personnels,cni',
            'horaire_debut_travail' => 'required|date_format:H:i|',
            'horaire_fin_travail' => 'required|date_format:H:i|after:horaire_debut_travail',
            // 'heure_arrivee' => 'required|date',
            // 'heure_depart' => 'required|date|after:heure_arrivee',
            'email' => 'required|email|max:255|unique:personnels,email',
            'cjm' => 'required|numeric|min:0.01',
            'status' => 'required'
        ]);
        
        $number = mt_rand(1000000000,9999999999);
        
        if ($this -> productCodeExists($number)) {
            $number = mt_rand(1000000000,9999999999);
        }

        $request['qr_code'] = $number;
            // Création d'un mot de passe aléatoire
            //$password = Str::random(10);
            $defaultPassword = 'passwordP@223$$%'; 

            // Hachage du mot de passe
           // $hashedPassword = Hash::make($password);
            //return "Mot de passe temporaire généré pour l'utilisateur : " . $password;

            //Création d'un utilisateur avec l'email et le mot de passe généré
            // $user = new User();
            // $user->name = $request->input('nom');
            // $user->email = $request->input('email');
            // $user->password = $hashedPassword;
            // $user->save();

            // Créer l'utilisateur avec le mot de passe par défaut
                $user = User::create([
                    'name' => $request->nom, // ou toute autre donnée appropriée
                    'email' => $request->email,
                    'password' => Hash::make($defaultPassword),
                ]);

                //         // Créer l'utilisateur avec le mot de passe par défaut
                // $user = User::create([
                //     'name' => $request->nom, // ou toute autre donnée appropriée
                //     'email' => $request->email,
                //     'password' => Hash::make($defaultPassword),
                // ]);
       
        Personnel::create($request->all());
        return redirect()->route('admin/personnels')->with('success', 'Personnel ajouté avec succès.');
    }

    public function productCodeExists($number) 
    {
        return Personnel::where('qr_code', $number)->exists();
    }  
    public function edit(string $id)
    {
        $personnel = Personnel::findOrFail($id);
        return view('personnels.edit', compact('personnel'));
    }

   
    public function update(Request $request, string $id)
    {
        $personnel = Personnel::findOrFail($id);
        $personnel->update($request->all());

        return redirect()->route('admin/personnels')->with('success', 'Personnel mis à jour avec succès.');
    }

    public function destroy(string $id)
    {
        $personnel = Personnel::findOrFail($id);
        $personnel->delete();
        return redirect()->route('admin/personnels')->with('success', 'Personnel supprimé avec succès.');
    }
    public function show(string $id)
    {
        $personnel = Personnel::findOrFail($id);
 
        return view('personnels.show', compact('personnel'));
    }
    public function desactivate($id)
    {
        $personnel = Personnel::find($id);
        if ($personnel) {
            $personnel->update(['active' => false]);
            return redirect()->route('admin/personnels')->with('success', 'Le compte de l\'employé a été désactivé avec succès.');
        } else {
            return redirect()->route('admin/personnels')->with('error', 'Employé non trouvé.');
        }
    }
}
