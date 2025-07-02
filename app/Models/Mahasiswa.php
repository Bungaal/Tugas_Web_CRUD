<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = ['NIM', 'Nama', 'Prodi', 'Email', 'Alamat', 'Status'];
}
