<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Requirement extends Model
{
    use HasFactory;

    protected $fillable = [
        'digievolution_id',
        'attack_attribute',
        'defense_attribute',
        'spirit_attribute',
        'wisdom_attribute',
        'charisma_attribute',
        'fire_attribute',
        'water_attribute',
        'ice_attribute',
        'wind_attribute',
        'eletric_attribute',
        'metal_attribute',
        'dark_attribute'
    ];

    public $timestamps = false;

    public function digievolution()
    {
        return $this->belongsTo(Digievolution::class);
    }

    public function digimons()
    {
        return $this->belongsToMany(Digimon::class,'digimon_requirements')->using(DigimonRequirement::class)->withPivot(['leveling']);

    }
}
