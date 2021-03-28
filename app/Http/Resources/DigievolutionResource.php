<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DigievolutionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {            
        return [
            'digimon' =>new DigimonResource($this->digimon),
            'requirement' => new RequirementResource($this->requirement)            
        ];
        
    }
}
