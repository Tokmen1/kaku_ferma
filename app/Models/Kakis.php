<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kakis extends Model
{
    use HasFactory;
    protected $table = 'kakis';

    protected $primaryKey = 'Cipa_numurs';

    protected $fillable = [
        'Cipa_numurs',
        'Vards',
        'Dzimsanas_dati',
        'Veselibas_stavoklis',
        'Nopirkts',
        'Vetersts_PK',
        'image',
    ];
}
