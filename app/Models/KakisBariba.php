<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KakisBariba extends Model
{
    use HasFactory;
    protected $table = 'kakis_bariba';
    public $timestamps = false;
    protected $fillable = [
        'bariba_id',
        'cipa_numurs',
    ];

    public function bariba()
    {
        return $this->belongsTo(Bariba::class, 'bariba_id');
    }

    public function kakis()
    {
        return $this->belongsTo(Kakis::class, 'cipa_numurs');
    }
}
