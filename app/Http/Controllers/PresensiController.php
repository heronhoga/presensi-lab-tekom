<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresensiController extends Controller
{
    public function index(Request $request)
    {
        $lab = $request->route('lab');
        return view('presensi', compact('lab'));
    }

    public function present(Request $request) {
        $lab = $request->input('nim');
        dd($lab);
    }
    
}
