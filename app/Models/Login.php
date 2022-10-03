<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Login extends Model
{
   
    public $table = 'login';
    protected $primaryKey = 'id';
    public $fillable = [
        'id',
        'nombre',
        'correo',
        'contraseña'
    ];  
    
}
