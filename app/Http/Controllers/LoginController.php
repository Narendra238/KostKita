<?php
namespace App\Http\Controllers;

use App\Models\Login;
use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\UpdateLoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\ProfileUsersKost;

class LoginController extends Controller
{
    public function loginGabungan(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        if ($request->role == 'admin') {
            if ($request->username === 'AdminKostKita' && $request->password === '12344321') {
                session(['admin' => true]);
                return redirect('/dashboardadmin');
            } else {
                return back()->with('error', 'Username atau password admin salah');
            }
        } else {
            $anak = ProfileUsersKost::where('id', $request->username)->first();
            if ($anak) {

                session(['anak_id' => $anak->id]);
                return redirect('/profilanak/' . $anak->id);
            } else {
                return back()->with('error', 'ID tidak ditemukan');
            }
        }
    }
}
