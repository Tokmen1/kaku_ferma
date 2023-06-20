<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KakisIepircejs extends Model
{
    use HasFactory;
    protected $table = 'kakis_iepircejs';
    public function kakis()
    {
        return $this->belongsTo(Kakis::class);//, 'kakis_cipa_numurs');
    }
    public function iepircejs()
    {
        return $this->belongsTo(Iepircejs::class);//, 'iepircejs_pk');
    }
}
