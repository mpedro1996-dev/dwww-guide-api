<?php

namespace Database\Seeders;

use App\Models\Digimon;
use App\Models\Requirement;
use Illuminate\Database\Seeder;
use Database\Seeder\Helpers\CoreDigievolution;
use Database\Seeder\Helpers\CoreRookieDigievolution;

class VeemonCoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $veemonModel =  Digimon::with(['digievolutions','level'])->where('name','Veemon')->first();

        $veemon = new CoreRookieDigievolution("Veemon");

        $paildramon = [
            array(
                "name"=>"Stingmon",
                "level"=>5
            ),
            array(
                "name"=>"Veemon",
                "level"=>20
            )
        ];

        $imperialdramon = [
            array(
                "name"=>"Paildramon",
                "level"=>50
            ),
            array(
                "name"=>"Veemon",
                "level"=>40
            )
        ];

       

        $veemon->addDigievolution(CoreDigievolution::newComposition("Paildramon",$paildramon));
        $veemon->addDigievolution(CoreDigievolution::newComposition("Imperialdramon",$imperialdramon));   

        dump("Adicionando linhagem de digievolução principal no Veemon");

        foreach($veemonModel->digievolutions as $digievolution)
        {
            $evolution = $digievolution->digimon;           

            $coreDigievolution = array_merge([],...array_filter($veemon->digievolutions,fn($coreDigievolution) => $evolution->name == $coreDigievolution['name']));
            
            if(count($coreDigievolution) == 0) continue;            
            
            $requirement = new Requirement();                

            $requirement->digievolution_id = $digievolution->id;

            $requirement->save();

            foreach($coreDigievolution['requeriments'] as $requirementCore)            
            {                

                if($requirementCore['name'] == $veemonModel->name)
                {
                    $requirement->digimons()->attach($veemonModel->id,['leveling'=>$requirementCore['level']]);
                }
                else
                {
                    $targetDigimon = Digimon::with(['digievolutions','level'])->where('name',$requirementCore['name'])->first();                    
                    $requirement->digimons()->attach($targetDigimon->id,['leveling'=>$requirementCore['level']]);
                } 
            }    
        }
    }
}
