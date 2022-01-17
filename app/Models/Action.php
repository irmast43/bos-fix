<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    use HasFactory;
    protected $table = 'action';
    protected $fillable = [
        'coming_soon',
        'on_going',
        'event_completed',
    ];
}
