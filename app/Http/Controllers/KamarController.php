<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Http\Requests\StoreKamarRequest;
use App\Http\Requests\UpdateKamarRequest;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dataKamarAnak()
    {
        $kamars = Kamar::all();
        $ceweKosong = Kamar::countKamarCeweKosong();
        $cowoKosong = Kamar::countKamarCowoKosong();
        return view('datakamaranak', compact('kamars', 'ceweKosong', 'cowoKosong'));
    }

    public function dashboardAdminSummary()
    {
        $ceweKosong = Kamar::countKamarCeweKosong();
        $cowoKosong = Kamar::countKamarCowoKosong();
        return view('dashboardadmin', compact('ceweKosong', 'cowoKosong'));
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
    public function store(StoreKamarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kamar $kamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kamar $kamar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKamarRequest $request, Kamar $kamar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kamar $kamar)
    {
        //
    }
    // check data kamar kosong ketika pada data AnakKost terisi id_kmr yang tidak ada pada tabel Kamar
    public function checkKamarKosong()
    {
        $kamarKosong = Kamar::doesntHave('profileUsersKost')->get();
        return view('datakamarkosong', compact('kamarKosong'));
    }
    // check data kamar terisi ketika pada data AnakKost terisi id_kmr yang ada pada tabel Kamar
    public function checkKamarTerisi()
    {
        $kamarTerisi = Kamar::has('profileUsersKost')->get();
        return view('datakamarterisi', compact('kamarTerisi'));
    }
    // show data kamar
    public function showDataKamar()
    {
        $kamars = Kamar::all();
        return view('datakamaranak', compact('kamars'));
    }
    // show data kamar by id
    public function showKamarById($id)
    {
        $kamar = Kamar::findOrFail($id);
        return view('detailkamar', compact('kamar'));
    }
    public function dataPembayaran()
    {
        $kamars = \App\Models\Kamar::with('penghuniAktif')->get(); // Pastikan relasi sudah dibuat
        return view('dataPembayaran', compact('kamars'));
    }
}
