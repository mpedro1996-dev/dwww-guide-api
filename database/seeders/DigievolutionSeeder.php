<?php

namespace Database\Seeders;

use App\Models\Digimon;
use App\Models\Digievolution;
use Illuminate\Database\Seeder;

class DigievolutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rookieDigimons = 
        Digimon::join('levels','digimons.level_id','=','levels.id')
        ->where('levels.alias','rookie')
        ->get(['digimons.*']);

   
    
        $othersDigimons=
        Digimon::join('levels','digimons.level_id','=','levels.id')
        ->where('levels.alias','!=','rookie')
        ->get(['digimons.*']);   
    
    
        
        foreach($rookieDigimons as $rookie)
        {
            $digievolutions = [];        
    
            foreach($othersDigimons as $other)
            {
                $digievolution = new Digievolution();          
                $digievolution->digimon_id = $rookie->id;
                $digievolution->digivolveTo_id = $other->id;
                array_push($digievolutions,$digievolution->toArray());
    
            }

            $rookie->digievolutions()->createMany($digievolutions);
        }  
        
    }
}
