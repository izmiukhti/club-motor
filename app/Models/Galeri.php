<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;

    protected $table = 'galeris';

    protected $primaryKey = 'galeri_id';
    protected $fillable = [
        'galeri_nama',
        'foto', 
        'deskripsi', 
        'user_id', 
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
