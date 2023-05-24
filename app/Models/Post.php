<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Post extends Model
{
    use HasFactory;

    protected $table = 'post';

    public function user()
    {
        return $this->belongsTo(User::class, 'nik', 'nik');
    }

    public function fotoPosts()
    {
        return $this->hasMany(FotoPost::class, 'id_post');
    }

    public function komentar()
    {
        return $this->hasMany(Komentar::class, 'id_post');
    }

    public function likes()
    {
        return $this->hasMany(LikePost::class, 'id_post');
    }
}
