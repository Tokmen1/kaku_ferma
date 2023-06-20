<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pardevejs extends Model
{
    use HasFactory;
    protected $primaryKey = 'PK';

    protected $fillable = [
        'PK',
        'Vards',
        'Uzvards',
        'Telefona_nr',
        'Konta_nr',
        'Kvalitate',
    ];

    public function kaki()
    {
        return $this->hasMany(Kakis::class);//, 'Pardevejs_PK', 'PK');
    }
}
