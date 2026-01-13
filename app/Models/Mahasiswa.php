<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    /**
     * Nama tabel di database
     */
    protected $table = 'mahasiswa';

    /**
     * Kolom yang bisa diisi (mass assignment)
     */
    protected $fillable = [
        'nama',
        'nim',
        'jurusan'
    ];
}
