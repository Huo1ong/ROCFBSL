<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Utilisateur;
use Illuminate\Support\Facades\Hash;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function accueil()
    {
        return view('accueil');
    }

    public function connexion()
    {
        return view('connexion');
    }

    public function mission()
    {
        return view('mission');
    }

    public function tableConcertation()
    {
        return view('tableConcertation');
    }

    public function partenaires()
    {
        return view('partenaires');
    }

    public function aPropos()
    {
        return view('aPropos');
    }
}
