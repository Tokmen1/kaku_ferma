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
    public function vetarsts()
    {
        return $this->belongsTo(Vetarsts::class, 'Vetarsts_PK', 'PK');
    }

    public function iepirceji()
    {
        return $this->belongsToMany(Iepircejs::class, 'Kakis_Iepircejs', 'Cipa_numurs', 'Iepircejs_PK')
            ->withTimestamps();
    }

    public function pardeveji()
    {
        return $this->belongsToMany(Pardevejs::class, 'Kakis_Pardevejs', 'Cipa_numurs', 'Pardevejs_PK')
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
        return $this->belongsToMany(Bariba::class, 'Kakis_Bariba', 'Cipa_numurs', 'Bariba_ID')
            ->withTimestamps();
    }
}
