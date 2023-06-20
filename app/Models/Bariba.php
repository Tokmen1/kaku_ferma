<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bariba extends Model
{
    use HasFactory;
    protected $table = "bariba";
    protected $primaryKey = 'ID';

    protected $fillable = [
        'Nosaukums',
        'Ražotājs',
        'Ir_bioloģisks',
    ];

    public function kakis()
    {
        return $this->belongsToMany(Kakis::class, 'Kakis_Bariba', 'Bariba_ID', 'Cipa_numurs')
            ->withTimestamps();
    }
}
