<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $table = 'jadwal';
    protected $fillable = [
        'nama_event',
        'jenis',
        'tanggal_mulai',
        'tanggal_selesai',
        'deskripsi',
        'gambar',
        'action',
        'user_id',
    ];
    function gambar()
    {
        if ($this->image && file_exists(public_path('images/post/' . $this->gambar())))
            return asset('images/post/' . $this->gambar());
        else
            return asset('images/no_image.png');
    }
    protected $dates = ['tanggal'];
}
