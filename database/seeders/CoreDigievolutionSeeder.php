<?php

namespace Database\Seeders;

use App\Models\Digimon;
use Illuminate\Database\Seeder;
use App\Models\Requirement;
use Database\Seeder\Helpers\CoreDigievolution;
use Database\Seeder\Helpers\CoreRookieDigievolution;



class CoreDigievolutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $coreRookies = [];

        $agumon = new CoreRookieDigievolution("Agumon");
        $guilmon = new CoreRookieDigievolution("Guilmon");
        $kotemon = new CoreRookieDigievolution("Kotemon");
        $kumamon = new CoreRookieDigievolution("Kumamon");
        $monmon = new CoreRookieDigievolution("Monmon");
        $renamon = new CoreRookieDigievolution("Renamon");
        $patamon = new CoreRookieDigievolution("Patamon");
    
        $agumon->addDigievolution(CoreDigievolution::new("Greymon",5));
        $agumon->addDigievolution(CoreDigievolution::new("MetalGreymon",20));
        $agumon->addDigievolution(CoreDigievolution::new("WarGreymon",40));

        $guilmon->addDigievolution(CoreDigievolution::new("Growlmon",5));
        $guilmon->addDigievolution(CoreDigievolution::new("WarGrowlmon",20));
        $guilmon->addDigievolution(CoreDigievolution::new("Gallantmon",40));

        $kotemon->addDigievolution(CoreDigievolution::new("Dinohumon",5));
        $kotemon->addDigievolution(CoreDigievolution::new("Kyukimon",20));
        $kotemon->addDigievolution(CoreDigievolution::new("Guardiangemon",40));

        $kumamon->addDigievolution(CoreDigievolution::new("Grizzmon",5));
        $kumamon->addDigievolution(CoreDigievolution::new("GrapLeomon",20));
        $kumamon->addDigievolution(CoreDigievolution::new("Marsmon",20));

        $monmon->addDigievolution(CoreDigievolution::new("Hookmon",5));
        $monmon->addDigievolution(CoreDigievolution::new("Armormon",20));
        $monmon->addDigievolution(CoreDigievolution::new("Cannondramon",40));

        $renamon->addDigievolution(CoreDigievolution::new("Kyubimon",5));
        $renamon->addDigievolution(CoreDigievolution::new("Taomon",20));
        $renamon->addDigievolution(CoreDigievolution::new("Sakuyamon",40));
        
        $patamon->addDigievolution(CoreDigievolution::new("Angemon",5));
        $patamon->addDigievolution(CoreDigievolution::new("MagnaAngemon",20));
        $patamon->addDigievolution(CoreDigievolution::new("Seraphimon",40));


        array_push($coreRookies,$agumon->toArray());
        array_push($coreRookies,$guilmon->toArray());
        array_push($coreRookies,$kotemon->toArray());
        array_push($coreRookies,$kumamon->toArray());
        array_push($coreRookies,$monmon->toArray());
        array_push($coreRookies,$renamon->toArray());
        array_push($coreRookies,$patamon->toArray());


        $rookieDigimons =  Digimon::with(['digievolutions','level'])->where('level_id',1)->get();

        
        foreach($rookieDigimons as $digimon)
        {
            $rookieName = $digimon->name;
            dump("Adicionando linhagem de digievolução principal no ".$rookieName);

            $coreRookie = array_filter($coreRookies, fn($coreRookie) => $rookieName == $coreRookie['name']);   
            
            if(count($coreRookie) == 0) continue; 

            $coreDigievolutions = array_merge([],...array_map(fn($core) => $core['digievolutions'],$coreRookie));       
            
                    
            foreach($digimon->digievolutions as $digievolution){

                $evolution = $digievolution->digimon;

                $coreDigievolution = array_merge([],...array_filter($coreDigievolutions,fn($coreDigievolution) => $evolution->name == $coreDigievolution['name']));
            
                if(count($coreDigievolution) == 0) continue;             
                
                $requirement = new Requirement();                

                $requirement->digievolution_id = $digievolution->id;

                $requirement->save();

                $requirement->digimons()->attach($digimon->id,['leveling'=>$coreDigievolution['level']]);                
                            
            }
        
        }   

   
    }
}
