<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class btc_wallet extends Resource
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
            'guid' => $this->name,
            'address' => $this->price,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
