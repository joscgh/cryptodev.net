<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class btc_send extends Resource
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
            'from' => $this->name,
            'to' => $this->price,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
