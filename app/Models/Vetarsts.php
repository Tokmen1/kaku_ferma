<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vetarsts extends Model
{
    use HasFactory;
    protected $primaryKey = 'PK';

    protected $fillable = [
        'PK',
        'Vards',
        'Uzvards',
        'Stazs',
        'Telefona_nr',
    ];

    public function kaķi()
    {
        return $this->hasMany(Kakis::class, 'Vetarsts_PK', 'PK');
    }
}
