<?php

namespace App\Http\Controllers;

use App\Models\demo;
use Illuminate\Http\Request;

class demoController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store(Request $req)
    {
     $demo  = new demo;
     $demo ->name= $req->name;
     $demo ->email= $req->email;
     $demo ->address= $req->address;
     $demo ->phone= $req->phone;
     $demo ->save();   

     return back();

    }
}
