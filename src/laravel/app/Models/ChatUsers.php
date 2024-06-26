<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatUsers extends Model
{

    public $timestamps = false; // 追加

    use HasFactory;

    protected $fillable = [
        'user_id',
        'username',
        'password_hash',
        'email',
        'creator_id',
        'updated_by',
        'created_at',
        'updated_at'

    ];
}
