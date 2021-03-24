<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DigimonResource extends JsonResource
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
            'id'=>$this->id,
            'name'=>$this->name,
            'level'=>new LevelResource($this->level),
            'digievolutions'=>DigievolutionResource::collection($this->digievolutions)
        ];
    }
}
