<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iepircejs extends Model
{
    use HasFactory;
    protected $table = 'iepircejs';
    protected $primaryKey = 'PK';

    protected $fillable = [
        'PK',
        'Vards',
        'Uzvards',
        'Telefona_nr',
    ];

    public function kakis()
    {
        return $this->hasMany(KakisIepircejs::class);
    }
}
