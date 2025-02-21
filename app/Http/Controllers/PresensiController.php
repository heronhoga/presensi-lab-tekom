<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use App\Models\Student;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class PresensiController extends Controller
{
    public function index(Request $request)
    {
        $lab = $request->route('lab');
        return view('presensi', compact('lab'));
    }

    public function present(Request $request) {
        $labInput = $request->route('lab');
        $request->validate([
            'nim' => ['required', 'string', 'size:14'],
        ]);
    
        $nim = $request->input('nim');
        
        //find student
        $student = Student::where('nim', $nim)->first();
        
        if ($student === null) {
            return view('presensi', compact('lab'))->with('failMessage', 'Data Mahasiswa tidak ditemukan');
        }
        //end find student

        //find lab
        $lab = Lab::where('nama', $labInput)->first();

        if ($lab === null) {
            return view('presensi', ['lab' => $labInput])
                ->with('failMessage', 'Data Lab tidak ditemukan');
        }
        
        //end find lab

        //save presence
        $visitor = new Visitor();
        $visitor->nim = $student->nim;
        $visitor->id_lab = $lab->id;
        $visitor->check_in = now();
        $visitor->save();
        //end save presence

        //return
        return view('presensi', ['lab' => $labInput])->with('successMessage', 'Presensi berhasil ditambahkan');
        
    }
    
    
}
