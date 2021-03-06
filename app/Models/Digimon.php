<?php

namespace App\Models;

use App\Models\Level;
use App\Models\Digievolution;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Digimon extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "image",
        "level_id"
    ];

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function digievolutions()
    {
        return $this->hasMany(Digievolution::class);
    }
}
