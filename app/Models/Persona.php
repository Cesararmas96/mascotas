<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table = 'personas';
    protected $guarded = ['created_at', 'updated_at'];

    public function user()
    {
        $this->hasOne('App\Models\User');
    }
}
