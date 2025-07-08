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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfileUsersKostRequest $request)
    {
        //
    }

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
    public function edit(ProfileUsersKost $profileUsersKost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfileUsersKostRequest $request, ProfileUsersKost $profileUsersKost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProfileUsersKost $profileUsersKost)
    {
        //
    }
   public function index()
    {
        $data = ProfileUsersKost::all();
        return view('profileanak.index', compact('data'));
    }

    public function show($nik)
    {
        $anak = ProfileUsersKost::findOrFail($nik);
        $tgl_masuk = \Carbon\Carbon::parse($anak->tgl_masuk);
        $selesai_kost = $tgl_masuk->copy()->addDays($anak->durasi_kost)->format('Y-m-d');

        return view('profileanak', compact('anak', 'selesai_kost'));
    }
}
