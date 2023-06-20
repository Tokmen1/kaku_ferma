<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KakisPardevejs extends Model
{
    use HasFactory;
    protected $table = 'kakis_pardevejs';
    protected $primaryKey = 'id';

    public function kakis()
    {
        return $this->belongsTo(Kakis::class, 'kakis_id');
    }

    public function pardevejs()
    {
        return $this->belongsTo(Pardevejs::class, 'pardevejs_id');
    }
}
