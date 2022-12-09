<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'user_id',
    ];

    /**
     * implementation de la relation message_user
     * un message appartient à un user
     * 
     */

     public function user()
     {
        return $this->belongsTo(User::class);
     }
}
