<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatParticioant extends Model
{
    use HasFactory;

    protected $table = "chat_particioants";
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class , 'user_id');
    }

    public function chat()
    {
        return $this->belongsTo(Chat::class , 'chat_id');
    }
}
