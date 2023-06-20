<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KakisRotallieta extends Model
{
    use HasFactory;
    protected $table = 'kakis_rotallieta';

    protected $fillable = ['kakis_cipa_numurs', 'rotallieta_id', 'Ir_milaka'];

    public function kakis()
    {
        return $this->belongsTo(Kakis::class, 'kakis_cipa_numurs', 'cipa_numurs');
    }

    public function rotallieta()
    {
        return $this->belongsTo(Rotallieta::class, 'rotallieta_id');
    }
}
