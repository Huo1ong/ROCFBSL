<?php
/*
Auteur : David Tremblay
Date : Février 2023
Description : Modèle pour une Direction
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    protected $table = 'directions';
    protected $fillable = ['direction', 'lien_site', 'courriel', 'adresse', 'code_postal']; // Champs modifiables
    public $timestamps = true;  // Utilisation de created_at et updated_at
    use HasFactory;
}
