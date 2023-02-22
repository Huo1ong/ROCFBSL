<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;
use App\Models\Role;
use App\Models\Direction;
use Illuminate\Support\Facades\Hash;

class UtilisateurController extends Controller
{
    // Fonction pour l'authentification
    public function authentification(Request $request)
    {
        $request->validate
        ([
            'courriel' => ['required', 'string', 'min:5', 'max:35' ],
            'mdp' =>
            [
                'required',
                'string',
                'min:3',             // doit avoir au moins 8 caractères
                'regex:/[a-z]/',      // doit contenir au moins une lettre minuscule
                'regex:/[A-Z]/',      // doit contenir au moins une lettre majuscule
                'regex:/[0-9]/',      // doit contenir au moins un chiffre
                'regex:/[@$!%*#?&]/', // doit contenir au moins un caractère spécial
            ],
        ]);

        // Récupération des données du formulaire
        $unCourriel = request('courriel');
          
        //get user from database by email
        $unUtilisateur = Utilisateur::where('courriel', $unCourriel)->first();
        if ($unUtilisateur)
        {
            // Vérification du mot de passe
            $request->session()->put('courriel', $unUtilisateur);
            $request->session()->put('role', $unUtilisateur->role);
            if ((Hash::check(request('mdp'), $unUtilisateur->mdp) && $unUtilisateur->id_role == 1)) // 1 == admin
            {
                $courriel = $unUtilisateur->courriel;
                $request->session()->put('courriel', $courriel);
                $request->session()->put('role', $unUtilisateur->role);
                return view('admin.gestion');
            }
            else if ((Hash::check(request('mdp'), $unUtilisateur->mdp) && $unUtilisateur->id_role == 2))
            {
                return redirect('/membre');
            }
            else
            {
                return redirect('/connexion');
            }
        }
        else
        {
            return redirect('/connexion')->with('erreur', 'Mot de passe incorrect');
        }
    }

    // Fonction pour la déconnexion
    public function deconnexion(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('accueil');
    }


    public function admin_gestion_tables_concertation()
    {
        return view('admin.gestion_tables_concertation');
    }

    public function admin_gestion()
    {
        return view('admin.gestion');
    }

    // Fonction pour afficher la page de gestion des utilisateurs
    public function admin_gestion_utilisateurs(Request $request)
    {
        //les directions
        $lesDirections = Direction::all();
        //les roles
        $lesRoles = Role::all();
        $lesUtilisateurs = Utilisateur::with('direction')->get();
        $directions = Direction::with('utilisateurs')->get();
        return view('admin.gestion_utilisateurs')->with('lesDirections', $lesDirections)->with('lesRoles', $lesRoles)
            ->with('lesUtilisateurs', $lesUtilisateurs)->with('directions', $directions);
    }

    // Fonction (POST) pour l'ajout d'un utilisateur
    public function admin_ajouter_utilisateurs(Request $request)
    {
        //Validation des données
        $request->validate([
            'courriel' => ['required', 'string', 'min:5', 'max:35' ],
            'nom' => ['required', 'string',  'min:3', 'max:10'],
            'prenom' => ['required', 'string',  'min:3', 'max:10'],
            'code_postal' => ['required', 'string',  'min:7', 'max:7'],
            'mdp' => [
                   'required',
                    'string',
                    'min:8',             // doit avoir au moins 8 caractères
                    'regex:/[a-z]/',      // doit contenir au moins une lettre minuscule
                    'regex:/[A-Z]/',      // doit contenir au moins une lettre majuscule
                    'regex:/[0-9]/',      // doit contenir au moins un chiffre
                    'regex:/[@$!%*#?&]/', // doit contenir au moins un caractère spécial

            ],
            'telephone' => ['required', 'string',  'min:10', 'max:14'],
            'role' => ['required', 'integer'],
            'direction' => ['required', 'integer']
        ]);

        //Recuperation des données et ajout dans la BD
        $unUtilisateur = new Utilisateur();
        $unUtilisateur->courriel = $request->input('courriel');
        $unUtilisateur->nom = $request->input('nom');
        $unUtilisateur->prenom = $request->input('prenom');
        $unUtilisateur->code_postal = $request->input('code_postal');
        //hashage du mot de passe
        $unUtilisateur->mdp = Hash::make($request->input('mdp'));
        $unUtilisateur->telephone = $request->input('telephone');
        $unUtilisateur->id_role = $request->input('role');
        $unUtilisateur->id_direction = $request->input('direction');
        $unUtilisateur->save();
        return redirect()->back();
    }
}
