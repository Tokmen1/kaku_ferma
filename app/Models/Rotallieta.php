<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rotallieta extends Model
{
    use HasFactory;
    protected $table = 'rotallieta';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'Nosaukums',
        'Tips',
    ];

    public function kakis()
    {
        return $this->hasMany(Kakis::class);
    }
}
