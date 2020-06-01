<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InterestResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'img' => $this->img
        ];
        /*return [
            'id' => $this->id,
            'name' => $this->name,
            'img' => $this->img,
            'info' => [
                //to handle un exist ids
                'id' => $this?$this->id:0,
                'name' => $this->name
            ]
        ];*/
    }
}
