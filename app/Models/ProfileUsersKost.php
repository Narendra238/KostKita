<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ProfileUsersKostController;

class ProfileUsersKost extends Model
{
    use HasFactory;
    protected $table = 'AnakKost';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $casts = [
    'status_bayar' => 'boolean',
    ];

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

    public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'id_kmr', 'id_kmr');
    }
}
