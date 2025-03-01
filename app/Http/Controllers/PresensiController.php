<?php
namespace App\Http\Controllers;

use App\Models\Lab;
use App\Models\Student;
use App\Models\Visitor;
use Illuminate\Http\Request;

class PresensiController extends Controller
{
    // Menampilkan halaman presensi
    public function index(Request $request)
    {
        $lab = $request->route('lab');           // Ambil parameter lab dari route
        return view('presensi', compact('lab')); // Tampilkan view dengan data lab
    }

    // Menyimpan data presensi
    public function present(Request $request)
    {
        $labInput = $request->route('lab');

        // Validasi input NIM
        $request->validate([
            'nim' => ['required', 'string', 'size:14'],
        ]);

        $nim = $request->input('nim');

        // Cari data mahasiswa
        $student = Student::where('nim', $nim)->first();
        if ($student === null) {
            return redirect()->route('presensi.index', ['lab' => $labInput])
                ->with('failMessage', 'Data Mahasiswa tidak ditemukan'); // Kirim pesan error
        }

        // Cari data lab
        $lab = Lab::where('nama', $labInput)->first();
        if ($lab === null) {
            return redirect()->route('presensi.index', ['lab' => $labInput])
                ->with('failMessage', 'Data Lab tidak ditemukan'); // Kirim pesan error
        }

        // Simpan presensi
        $visitor           = new Visitor();
        $visitor->nim      = $student->nim;
        $visitor->id_lab   = $lab->id;
        $visitor->check_in = now();
        $visitor->save();

        // Kirim pesan sukses
        return redirect()->route('presensi.index', ['lab' => $labInput])
            ->with('successMessage', 'Presensi berhasil ditambahkan');
    }
}
