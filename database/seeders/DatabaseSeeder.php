<?php

namespace Database\Seeders;

use App\Models\Seeding;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    private $seeders = [
        array("class_name"=>LevelSeeder::class,"description"=>"Adiciona leveis dos digimons"),
        array("class_name"=>DigimonsTableSeeder::class,"description"=>"Adiciona os digimons nas tabelas"),
        array("class_name"=>DigievolutionSeeder::class,"description"=>"Adiciona leveis dos digimons"),
        array("class_name"=>CoreDigievolutionSeeder::class,"description"=>"Adiciona os requisitos da linhagem principal dos digimons"),
        array("class_name"=>VeemonCoreSeeder::class,"description"=>"Adiciona os requisitos da linhagem principal do Veemon"),
    ];
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->seeders as $seeder)
        {
            if($this->exists($seeder["class_name"])) continue;

            $this->call($seeder["class_name"]);
            
            Seeding::create($seeder);        
        }       
      
    }


    private function exists($className)
    {
        $seeding = Seeding::where("class_name",$className)->first();

        return $seeding != null;        

        
    }
}
