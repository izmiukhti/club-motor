<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika berbeda dari konvensi Laravel
    protected $table = 'produks';

    // Menentukan kolom yang dapat diisi massal
    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'gambar',
        'kategori',
    ];

    // Menentukan relasi jika ada
    // Contoh: jika produk terkait dengan user atau kategori tertentu
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    // public function kategori()
    // {
    //     return $this->belongsTo(Kategori::class);
    // }
}
