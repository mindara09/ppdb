<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataDiris extends Model
{
    // Table data_diri
    protected $table = 'data_diri';
    // Kolom yang boleh masuk
    protected $fillable = [
        'users_id',
        'nama_lengkap',
        'nis',
        'nisn',
        'tanggal_lahir',
        'tempat_lahir',
        'no_kk',
        'nik',
        'agama',
        'alamat',
        'kelurahan',
        'kecamatan',
        'kodepos',
        'no_register_akte',
        'jenis_tinggal',
        'transportasi',
        'no_telprumah',
        'no_hp',
        'email',
    ];
    
}
