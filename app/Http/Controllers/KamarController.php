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
    public function dashboardSummary()
    {
        $totalKamar = \App\Models\Kamar::count();
        $kamarTerisi = \App\Models\Kamar::whereHas('profileUsersKost')->count();
        // Jika relasi belum ada, bisa pakai: where('status', 'terisi')->count();

        return view('dashboard', compact('totalKamar', 'kamarTerisi'));
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
    public function aboutSummary()
    {
        $totalKamar = \App\Models\Kamar::count();
        $kamarTerisi = \App\Models\Kamar::whereHas('profileUsersKost')->count();
        return view('about', compact('totalKamar', 'kamarTerisi'));
    }

    // Jumlah ready kamar cowo dan cewe
    public function detailCowo1()
    {
        $total = \App\Models\Kamar::whereIn('id_kmr', ['R009', 'R010', 'R011'])
            ->where('dimensi', 'M')
            ->count();
        $terisi = \App\Models\Kamar::whereIn('id_kmr', ['R009', 'R010', 'R011'])
            ->where('dimensi', 'M')
            ->has('profileUsersKost')
            ->count();
        $ready = $total - $terisi;
        return view('detailcowo1', compact('total', 'terisi', 'ready'));
    }

    public function detailCowo2()
    {
        $total = \App\Models\Kamar::whereIn('id_kmr', ['R012', 'R013', 'R013','R014', 'R015', 'R016','R017', 'R018', 'R019','R020', 'R021', 'R022'])
            ->where('dimensi', 'M')
            ->count();
        $terisi = \App\Models\Kamar::whereIn('id_kmr', ['R012', 'R013', 'R013','R014', 'R015', 'R016','R017', 'R018', 'R019','R020', 'R021', 'R022'])
            ->where('dimensi', 'M')
            ->has('profileUsersKost')
            ->count();
        $ready = $total - $terisi;
        return view('detailcowo2', compact('total', 'terisi', 'ready'));
    }

    public function detailCewe1()
    {
        $total = \App\Models\Kamar::whereIn('id_kmr', ['R005', 'R006', 'R007','R008'])
            ->where('dimensi', 'L')
            ->count();
        $terisi = \App\Models\Kamar::whereIn('id_kmr', ['R005', 'R006', 'R007','R008'])
            ->where('dimensi', 'L')
            ->has('profileUsersKost')
            ->count();
        $ready = $total - $terisi;
        return view('detailcewe1', compact('total', 'terisi', 'ready'));
    }

    public function detailCewe2()
    {
        $total = \App\Models\Kamar::whereIn('id_kmr', ['R001', 'R002', 'R003','R004'])
            ->where('dimensi', 'M')
            ->count();
        $terisi = \App\Models\Kamar::whereIn('id_kmr', ['R001', 'R002', 'R003','R004'])
            ->where('dimensi', 'M')
            ->has('profileUsersKost')
            ->count();
        $ready = $total - $terisi;
        return view('detailcewe2', compact('total', 'terisi', 'ready'));
    }
}
