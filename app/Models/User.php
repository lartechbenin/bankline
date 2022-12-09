<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',
        'email',
        'password',
        'prenom',
        'date_naissance',
        'telephone',
        'adresse_domicile',
        'profession',
        'numero_carte',
        'solde',
        'devise',
        'staut_compte',
        'montant_attente',
        'etape',
        'code1',
        'code2',
        'code3',
        'code4',
        'code5',
        'bloque_compte',
        'pourcentage',
        'login'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * implementation de la relation user_banque
     * un user a un seul compte
     */

     public function banque()
     {
        return $this->hasOne(Banque::class);                                                                                          
     }

     /**
      * implementation de la relation user_historique
      *un user peut avoir plusieurs historiques
      */

      public function historiques()
      {
        return $this->hasMany(Historique::class);
      }

      /**
       * implementation de la relation user_message
       *un user peut recevoir plusieurs compte
       */

       public function messages()
       {
        return $this->hasMany(Message::class);
       }

    
}
