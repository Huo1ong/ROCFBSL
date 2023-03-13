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

// Routes du Controller principal pour la redirection vers les vues de base
Route::get('/',                         [Controller::class, 'accueil'])->name('accueil');
Route::get('/accueil',                  [Controller::class, 'accueil'])->name('accueil');
Route::get('/mission',                  [Controller::class, 'mission'])->name('mission');
Route::get('/tableConcertation',        [Controller::class, 'tableConcertation'])->name('tableConcertation');
Route::get('/partenaires',              [Controller::class, 'partenaires'])->name('partenaires');
Route::get('/aPropos',                  [Controller::class, 'aPropos'])->name('aPropos');
Route::get('/connexion',                [Controller::class, 'connexion'])->name('connexion');

// Routes du Controller pour la gestion des utilisateurs et des rôles, session etc...
Route::post('/authentification',        [UtilisateurController::class, 'authentification'])->name('authentification');
// Route pour la déconnexion (en post)
Route::get('/deconnexion',             [UtilisateurController::class, 'deconnexion'])->name('deconnexion');

// Routes pour l'administration
Route::get('/admin/gestion',   [UtilisateurController::class, 'admin_gestion'])->name('admin.gestion');

// Gestion Tables de concertation
Route::get('/admin/gestion/tables-concertation/', [UtilisateurController::class, 'admin_gestion_tables_concertation'])->name('admin.gestion.tables_concertation');
Route::post('/admin/ajouter/tables-concertation/', [UtilisateurController::class, 'admin_ajouter_tables_concertation'])->name('admin.ajouter.tables_concertation');

// Gestion Utilisateurs
Route::get('/admin/gestion/utilisateurs',   [UtilisateurController::class, 'admin_gestion_utilisateurs'])->name('admin.gestion.utilisateurs');
Route::post('/admin/ajouter/utilisateurs',  [UtilisateurController::class, 'admin_ajouter_utilisateurs'])->name('admin.ajouter.utilisateurs');

// Gestion Partenaires
Route::get('/admin/gestion/partenaires',   [UtilisateurController::class, 'admin_gestion_partenaires'])->name('admin.gestion.partenaires');
Route::post('/admin/ajouter/partenaires',  [UtilisateurController::class, 'admin_ajouter_partenaires'])->name('admin.ajouter.partenaires');
