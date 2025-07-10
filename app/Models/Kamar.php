<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\KamarController;

class Kamar extends Model
{
    /** @use HasFactory<\Database\Factories\KamarFactory> */
    use HasFactory;
    protected $table = 'kamar'; // Nama tabel (default: snake_case dari model)

    protected $primaryKey = 'id_kmr'; // Jika primary key-nya bukan 'id'

    public $incrementing = false; // Jika primary key bukan auto-increment

    protected $keyType = 'string'; // Tipe primary key jika bukan integer

    protected $fillable = [
        'id_kmr',
        'jenis_kamar',
        'dimensi',
        'harga',
    ];
    // show data kamar
    public function profileUsersKost() {
        return $this->hasMany(ProfileUsersKost::class, 'id_kmr', 'id_kmr');
    }
    // Jumlah kamar cewe kosong (R001 - R008)
    public static function countKamarCeweKosong()
    {
        return self::whereBetween('id_kmr', ['R001', 'R008'])
            ->doesntHave('profileUsersKost')
            ->count();
    }

    // Jumlah kamar cowo kosong (R009 - R022)
    public static function countKamarCowoKosong()
    {
        return self::whereBetween('id_kmr', ['R009', 'R022'])
            ->doesntHave('profileUsersKost')
            ->count();
    }
    public function penghuniAktif()
    {
        return $this->hasOne(ProfileUsersKost::class, 'id_kmr', 'id_kmr');
    }
}
