<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Application;

class ApplicationController extends Controller
{
    public function index(){
        return Application::all();
    }
    public function store(Request $request){
        return Application::create($request->all());
    }
    public function update(Application $id, Request $request){
        $id->update($request->all());
    }
}
