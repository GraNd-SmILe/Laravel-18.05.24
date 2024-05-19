<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Application;

class Users extends Model
{
    use HasFactory;


    public $timestamps = false;
    protected $fillable = [
        'login',
        'password',        
        'name',
        'surname',
        'patronymic',
        'phone',
        'mail'
    ];
}
