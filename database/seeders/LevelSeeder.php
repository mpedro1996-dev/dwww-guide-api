<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Level::Create(["name"=>"Rookie Digimon","alias"=>"rookie"]);
        Level::Create(["name"=>"Champion Digimon","alias"=>"champion"]);
        Level::Create(["name"=>"Ultimate Digimon","alias"=>"ultimate"]);
        Level::Create(["name"=>"Mega Digimon","alias"=>"mega"]);        
    }
}
