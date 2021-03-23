<?php

namespace App\Services;

use App\Models\Digimon;
use Illuminate\Http\Request;
use App\Http\Resources\DigimonCollection;



class DigimonService {

    protected $digimonModel;


    public function __construct(Digimon $digimon){

        $this->digimonModel = $digimon;

    }


    public function create(Request $request)
    { 
        
        $digimons = $request->input('digimons');

        foreach($digimons as $digimon){
            $this->digimonModel->create($digimon);
        }       

        return new DigimonCollection($this->digimonModel->with('level')->get());
    }

    public function all(){
        return new DigimonCollection($this->digimonModel->with('level')->get());
    }



}