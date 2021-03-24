<?php

namespace App\Http\Resources;

use App\Http\Resources\LevelResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class LevelCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return LevelResource::collection($this->collection);
    }             
      
}
