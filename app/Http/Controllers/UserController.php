<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function userprofile()
    {
        return view('userprofile');
    }
 
    // public function about()
    // {
    //     return view('about');
    // }
    // Méthode pour mettre à jour le profil de l'utilisateur
    public function updateUserProfile(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|string|email|max:255|unique:users,email,' . Auth::id(),
            'password' => 'nullable|string|min:4|confirmed',
        ]);
        
        // Récupérer l'utilisateur authentifié
        $user = User::find(Auth::id());

        // Mise à jour des informations du profil
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));

        // Enregistrer les modifications
        $user->save();

        // Redirection vers la page de profil avec un message de succès
        return redirect()->route('profile')->with('success', 'Profil mis à jour avec succès.');
    }

}
