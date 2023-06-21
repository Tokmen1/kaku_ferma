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


    public function iepirceji()
    {
        return $this->belongsToMany(Iepircejs::class, 'kakis_iepircejs', 'Kakis_Cipa_Num', 'Iepircejs_PK')
            ->withTimestamps();
    }

    public function pardeveji()
    {
        return $this->belongsToMany(Pardevejs::class, 'kakis_pardevejs', 'Kakis_Cipa_Num', 'Pardevejs_PK')
            ->withTimestamps();
    }

    public function rotallietas()
    {
        return $this->belongsToMany(Rotallieta::class, 'kakis_rotallieta', 'Kakis_Cipa_Num', 'Rotallieta_ID')
            ->withPivot('Ir_milaka');
            // ->withTimestamps();
    }

    public function baribas()
    {
        return $this->belongsToMany(Bariba::class, 'kakis_bariba', 'Kakis_Cipa_Num', 'Bariba_ID');
            // ->withTimestamps();
    }
}
