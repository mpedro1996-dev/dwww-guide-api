<?php

namespace App\Models;

use App\Models\Digimon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Level extends Model
{
    use HasFactory;

    protected $attributes = [
        'name'=>true,
        'alias'=>true
    ];


    public function digimons()
    {
        return $this->hasMany(Digimon::class);
    }

}
