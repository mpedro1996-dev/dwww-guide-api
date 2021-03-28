<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DigimonRequirement extends Pivot
{
    use HasFactory;


    protected $fillable = [
        'digimon_id',
        'requirement_id',
        'leveling'
    ];
}
