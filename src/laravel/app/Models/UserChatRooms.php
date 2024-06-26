<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserChatRooms extends Model
{
    public $timestamps = false; // 追加

    use HasFactory;

    protected $fillable = [
        'user_chat_rooms_id',
        'room_id',
        'user_id'
    ];
}
