<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Berita extends Model
{
    use HasFactory;
    
    protected $table = 'berita'; 

    protected $fillable = [
        'nik',
        'jenis_berita',
        'judul',
        'isi_berita',
        'foto',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'nik', 'nik');
    }

    public function fotoBeritas()
    {
        return $this->hasMany(FotoBerita::class, 'id_berita');
    }

    public function getCreatedAtAttribute($value)
    {
        return date('d-m-Y H:i:s', strtotime($value));
    }

    public function getJenisBeritaTextAttribute()
    {
        $jenis = $this->jenis_berita;

        switch ($jenis) {
            case '1':
                return 'post';
            case '2':
                return 'berita';
            case '3':
                return 'hoax';
            default:
                return '-';
        }
    }
}
