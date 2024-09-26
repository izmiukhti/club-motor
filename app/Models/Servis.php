<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servis extends Model
{
    use HasFactory;

    protected $table = 'servis';

    protected $primaryKey = 'servis_id';
    protected $fillable = [
        'nama', 
        'deskripsi', 
    ];
}
