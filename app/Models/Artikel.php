<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikels';

    protected $primaryKey = 'artikel_id';
    protected $fillable = [ 
        'artikel_nama',
        'judul', 
        'konten', 
        'user_id', 
    ];

    public function create()
    {
        return view('gallery.create');
    }
}
