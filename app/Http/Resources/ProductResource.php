<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Product */
class ProductResource extends JsonResource
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'uuid' => $this->uuid,
            'title' => $this->title,
            'slug' => $this->title . '-' . $this->uuid,
            'description' => $this->description,
            'price' => $this->price,
            'imageUrl' => $this->imageUrl,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
