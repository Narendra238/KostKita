<?php

namespace App\Http\Controllers;

use App\Models\ProfileUsersKost;
use App\Http\Requests\StoreProfileUsersKostRequest;
use App\Http\Requests\UpdateProfileUsersKostRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ProfileUsersKostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambahpenghuni');
    }

    public function store(Request $request)
    {

        $request->validate([
            'id' => 'required|unique:AnakKost,id',
            'namalengkap' => 'required',
            'jenis_kelamin' => 'required',
            'no_tlp' => 'required',
            'asal' => 'required',
            'namaortu' => 'required',
            'no_ortu' => 'required',
            'id_kmr' => 'required',
            'tgl_masuk' => 'required|date',
            'durasi_kost' => 'required',
        ]);

        ProfileUsersKost::create([
            'id' => $request->id,
            'namalengkap' => $request->namalengkap,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_tlp' => $request->no_tlp,
            'asal' => $request->asal,
            'namaortu' => $request->namaortu,
            'no_ortu' => $request->no_ortu,
            'id_kmr' => $request->id_kmr,
            'tgl_masuk' => $request->tgl_masuk,
            'durasi_kost' => $request->durasi_kost,
        ]);

        return redirect('/dataPenghuni')->with('success', 'Data penghuni berhasil ditambahkan!');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(StoreProfileUsersKostRequest $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     */
    // public function show(ProfileUsersKost $profileUsersKost)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    //
   public function index()
    {
        $penghuni = ProfileUsersKost::all();
        return view('dataPenghuni', compact('penghuni'));
    }

    public function show($nik)
    {
        $anak = ProfileUsersKost::findOrFail($nik);
        $tgl_masuk = \Carbon\Carbon::parse($anak->tgl_masuk);
        $selesai_kost = $tgl_masuk->copy()->addDays($anak->durasi_kost)->format('Y-m-d');

        return view('profileanak', compact('anak', 'selesai_kost'));
    }

    public function edit($id)
    {
        $penghuni = ProfileUsersKost::where('id', $id)->firstOrFail();
        return view('editPenghuni', compact('penghuni'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'namalengkap' => 'required',
            'jenis_kelamin' => 'required',
            'no_tlp' => 'required',
            'asal' => 'required',
            'namaortu' => 'required',
            'no_ortu' => 'required',
            'id_kmr' => 'required',
            'tgl_masuk' => 'required|date',
            'durasi_kost' => 'required',
        ]);
        $penghuni = ProfileUsersKost::where('id', $id)->firstOrFail();
        $penghuni->update($request->all());
        return redirect('/dataPenghuni')->with('success', 'Data penghuni berhasil diupdate!');
    }

    public function destroy($id)
    {
        $penghuni = ProfileUsersKost::where('id', $id)->firstOrFail();
        $penghuni->delete();
        return redirect('/dataPenghuni')->with('success', 'Data penghuni berhasil dihapus!');
    }
    public function updateStatusBayar(Request $request)
    {
        $penghuni = ProfileUsersKost::findOrFail($request->id);

        // Jika dicentang, set true dan tanggal sekarang untuk menyimpan status bayar
        if ($request->status_bayar === true || $request->status_bayar === 'true') {
            $penghuni->status_bayar = true;
            $penghuni->tanggal_bayar = now(); // simpan waktu saat ini
        } else {
            $penghuni->status_bayar = false;
            $penghuni->tanggal_bayar = null; // reset tanggal kalau tidak bayar
        }

        $penghuni->save();

        return response()->json(['success' => true]);
    }
}
