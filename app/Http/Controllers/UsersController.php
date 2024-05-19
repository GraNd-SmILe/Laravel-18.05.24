<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


use App\Models\Users;

class UsersController extends Controller
{
    public function index(){
        return Users::all();
    }
    public function store(Request $request){
        return Users::create($request->all());
    }
}
