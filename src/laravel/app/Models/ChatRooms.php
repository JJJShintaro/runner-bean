<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatRooms extends Model
{

    use HasFactory;

    protected $fillable = [
        'room_id',
        'chat_room_name',
        'insert_id',
        'creator_id',
        'updated_at',
        'created_at',
        'updated_at'

    ];

}
