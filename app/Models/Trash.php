<?php

// File: app/Models/Trash.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trash extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'no_hp',
        'alamat',
        'jenis_sampah',
        'tanggal_penjemputan',
        'waktu_penjemputan',
        'kendaraan',
        'jarak',
        'biaya_penjemputan',
        'status', // Tambahkan atribut status
        // tambahkan atribut lain yang ingin diizinkan di sini
    ];

    // ...
}
