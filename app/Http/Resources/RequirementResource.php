<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RequirementResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $req = parent::toArray($request);
        $attr = array_splice($req,2);

        return [
            'attributes'=>$attr,
            'digimons'=>DigimonRequirementResource::collection($this->digimons)
        ];
    }
}
