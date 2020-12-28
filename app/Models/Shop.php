<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Shop as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Shop extends Model
{
    use HasFactory;


    protected $table = 'shops';
    protected $fillable = [
       
    ];


    protected $hidden = [
        
    ];
}

