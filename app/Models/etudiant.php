<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'date_naissance',
        'numero_etudiant',
        'matricule',
        'cycle',
        'annee_academique',
        'nom_prenom_tuteur',
        'numero_tuteur',
     ];
}
