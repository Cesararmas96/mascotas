<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'status'];

    public function razas()
    {
        return $this->hasMany(Raza::class);
    }
}
