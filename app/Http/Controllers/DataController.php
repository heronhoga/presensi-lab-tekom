<?php
namespace App\Http\Controllers;

use App\Models\Lab;
use App\Models\Visitor;
use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
// Ambil query pencarian dan filter
        $search    = $request->input('search');
        $labFilter = $request->input('lab');

// Query dasar
        $query = Visitor::with(['student', 'lab']);

// Tambahkan filter pencarian
        if ($search) {
            $query->whereHas('student', function ($q) use ($search) {
                $q->where('nim', 'like', "%$search%")
                    ->orWhere('nama', 'like', "%$search%");
            });
        }

// Tambahkan filter lab
        if ($labFilter) {
            $query->where('id_lab', $labFilter);
        }

// Pagination dengan 10 data per halaman
        $visitors = $query->paginate(10);

// Ambil daftar lab untuk dropdown filter
        $labs = Lab::all();

// Kirim data ke view
        return view('data', compact('visitors', 'labs', 'search', 'labFilter'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
