<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    public $timestamps = false; // 追加

    use HasFactory;

    protected $fillable = [
        'message_id',
        'room_id',
        'user_id',
        'message_content',
        'timestamp'

    ];
}
