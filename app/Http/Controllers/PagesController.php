<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //Menggunakan Fitur DB(Insert, Select, Update, Delete)

class PagesController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function about(){
        return view('aboutus', ['nama' => 'Peler']); 
    }
}
