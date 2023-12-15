<?php

namespace App\Http\Controllers;

use App\Models\Countries;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    public static function show(){
        $temp = Countries::all();
        return view('home', $temp);
    }
}
