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
        'bic_swift',
        'user_id',
        'statut',
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
