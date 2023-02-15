<?php
/*
Auteur : David Tremblay
Date : Février 2023
Description : Modèle pour un Utilisateur
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    protected $table = 'utilisateurs';
    protected $fillable = ['courriel', 'mdp', 'prenom', 'nom', 'id_role', 'id_direction', 'telephone', 'code_postal']; // Champs modifiables
    public $timestamps = true;  // Utilisation de created_at et updated_at
    use HasFactory;

    public function role()
    {
        return $this->belongsTo('App\Models\Role', 'id_role');
    }
}
