<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Admins;

class AdminsController extends Controller
{
    public function index(){
        return Admins::all();
    }
}
