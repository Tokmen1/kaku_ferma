<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iepircejs extends Model
{
    use HasFactory;
    protected $table = 'Iepircējs';
    protected $primaryKey = 'PK';
    public $timestamps = false;

    protected $fillable = [
        'PK',
        'Vārds',
        'Uzvārds',
        'Telefona_nr',
    ];

    public function kakis()
    {
        return $this->hasMany(KakisIepircejs::class);
    }
}
