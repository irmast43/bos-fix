<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    public $timestamp = true;
    protected $table = 'pendaftaran';
    protected $fillable = [
        'nama_team',
        'nama_ketua',
        'alamat',
        'no_wa',
        'id1',
        'nickname1',
        'id2',
        'nickname2'
    ];
}
