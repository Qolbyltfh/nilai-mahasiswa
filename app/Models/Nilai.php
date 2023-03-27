<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table = 'nilai_mahasiswa';
    protected $fillable=[
        'nama',
        'nilai_quis',
        'nilai_tugas',
        'nilai_absensi',
        'nilai_praktek',
        'nilai_uas',
        'total',
        'grade'
    ];
}