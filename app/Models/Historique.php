<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historique extends Model
{
    use HasFactory;

    protected $fillable = [
        'montant',
        'iban',
        'nouveauSolde',
        'user_id',
        'statut',
        'nom_prenom',
        'motif'
    ];

    

    /**
     * implementation de la relation historique_user
     * une historique à partir à un user 
     */

     public function user()
     {
        return $this->belongsTo(User::class);
     }
}
