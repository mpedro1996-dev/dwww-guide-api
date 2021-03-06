<?php

namespace App\Models;

use App\Models\Digimon;
use App\Models\Requirement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Digievolution extends Model
{
    use HasFactory;

    protected $attributes = [
        "digimon_id"=>true,
        "digivolveTo_id"=>true
    ];

    public function digimon()
    {
        return $this->belongsTo(Digimon::class,"digivolveTo_id","id");
    }

    public function requirement()
    {
        return $this->hasOne(Requirement::class);
    }


}
