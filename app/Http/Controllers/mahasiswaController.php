<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $mhs = "Nadia";
            $title = "Mahasiswa WebSaya.Com";
            $slug = "mahasiswa";
            $dataMhs = DB::table('mhs')
            ->join('prodi', 'mhs.prodi', '=', 'prodi.kd_prodi')
            ->get();
            return view('konten.mahasiswa',
            compact('mhs', 'title', 'slug', 'dataMhs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        DB::table('mhs')
                    ->insert([
                        'nim' => 22030003,
                        'nama' => 'Suzana',
                        'prodi' => 'D3TI',
                        'angkatan' => 2022]);
        echo "Data mhs berhasil ditambahkan";
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
