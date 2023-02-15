<?php
/*
Auteur : David Tremblay
Date : Février 2023
Description : Routes de l'application ROCF assurant la gestion vers les controleurs
*/

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DirectionController;
use App\Http\Controllers\DossierController;
use App\Http\Controllers\FichierController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UtilisateurController;

// Routes pour les pages principales
Route::get('/',                 [Controller::class, 'accueil'])->name('accueil');
Route::get('/accueil',          [Controller::class, 'accueil'])->name('accueil');
Route::get('/partenaires',      [Controller::class, 'partenaires'])->name('partenaires');


// Routes pour la gestion des session
Route::post('/authentification',    [Controller::class, 'authentification'])->name('authentification');
Route::get('/connexion',            [Controller::class, 'connexion'])->name('connexion');