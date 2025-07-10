<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function viewAkun()
    {
        // Ambil semua user, tampilkan plain_password jika ada (jika tidak, tampilkan '-')
        $users = \App\Models\User::all();
        return view('viewakun', compact('users'));
    }
    public function showBuatAkun()
    {
        return view('buatakun');
    }

    public function storeBuatAkun(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users,username',
            'password' => 'required|min:4',
            'role' => 'required|in:admin,user',
        ]);

        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->back()->with('success', 'Akun berhasil dibuat!');
    }
    public function loginGabungan(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        // Cek user berdasarkan username dan role di tabel users
        $user = User::where('username', $request->username)
            ->where('role', $request->role)
            ->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Set session sesuai role
            session(['user_id' => $user->id, 'role' => $user->role]);
            if ($user->role === 'admin') {
                return redirect('/dashboardadmin');
            } else {
                // Cari data AnakKost berdasarkan username (id)
                $anak = \App\Models\ProfileUsersKost::where('id', $user->username)->first();
                if ($anak) {
                    return redirect('/profilanak/' . $anak->id);
                } else {
                    return back()->with('error', 'Data penghuni tidak ditemukan');
                }
            }
        } else {
            return back()->with('error', 'Username atau password salah');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/login')->with('success', 'Berhasil logout!');
    }
    public function lihatAkun()
    {
        $users = \App\Models\User::select('id', 'username', 'role')->get();
        return view('lihatakun', compact('users'));
    }
    public function hapusUser($id)
    {
        $user = \App\Models\User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('success', 'User berhasil dihapus!');
    }
}

