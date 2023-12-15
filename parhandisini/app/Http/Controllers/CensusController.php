<?php

namespace App\Http\Controllers;

use App\Models\Countries;
use Illuminate\Http\Request;

class CensusController extends Controller
{
    public function show(){
        return view('home');
    }
    public static function submitData(Request $request){
        $datas = [
            'nik' => $request->input('nik'),
            'name' => $request->input('name'),
            'province' => $request->input('province'),
            'city' => $request->input('city'),
            'phonenumber' => $request->input('phonenumber'),
        ];
        
        return view ('dashboardAdmin', compact('datas'));
    }
    public function dashboardAdmin(){
        return view('dashboardAdmin', compact('countries'));
    }
}
