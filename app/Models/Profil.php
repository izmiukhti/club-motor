<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    protected $table = 'profiles';

    protected $primaryKey = 'profile_id';
    protected $fillable = [
        'profile_nama',
        'bio', 
        'photo', 
        'user_id', 
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
