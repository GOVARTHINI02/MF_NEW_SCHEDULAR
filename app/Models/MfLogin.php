<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class MfLogin extends Model
{
    use Notifiable;
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = ['token','login_at','expiary_at'];
   
}
