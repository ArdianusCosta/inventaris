<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JurnalLaboratorium extends Model
{
    use HasFactory;

    protected $table = 'jurnal_laboratorium'; // Nama tabel

    protected $fillable = [
        'hari',
        'tgl',
        'mapel',
        'kelas',
        'materi_kegiatan',
        'kejadian',
        'guru',
        'paraf'
    ];
}
