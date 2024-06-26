<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatRoom extends Model
{
    use HasFactory;

    public $timestamps = false; // 追加

    protected $fillable = ['name', 'email', 'email_verified_at','password','remember_token'];

}
