<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banque extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'domiciliation',
        'numero_compte',
        'user_id',
    ];

    protected $attributes = [

        'nom'=>"finance-ryan-bank.com", 
        
    ];

    /**
     * function pour la generation de numero de compte
     * return un entier de 11 chiffres
     */
    public static function numero_compte()
    {
       return random_int(12345678912, 98765432198);
         
    }

    /**
     * emplementation de la relation banque_user
     * compte appartient à un user spécifique
     */

     public function user()
     {
        return $this->belongsTo(User::class);
     }

}
