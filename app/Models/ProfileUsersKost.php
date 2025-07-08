<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ProfileUsersKostController;

class ProfileUsersKost extends Model
{
    /** @use HasFactory<\Database\Factories\ProfileUsersKostFactory> */
    use HasFactory;
     protected $table = 'AnakKost'; // Nama tabel (default: snake_case dari model)

    protected $primaryKey = 'id'; // Jika primary key-nya bukan 'id'

    public $incrementing = false; // Jika primary key bukan auto-increment

    protected $keyType = 'string'; // Tipe primary key jika bukan integer

    protected $fillable = [
        'id',
        'namalengkap',
        'namaortu',
        'asal',
        'no_tlp',
        'no_ortu',
        'jenis_kelamin',
        'tgl_masuk',
        'durasi_kost',
        'id_kmr',
    ];
}
