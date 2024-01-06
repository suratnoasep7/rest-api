<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
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
            'category' => [
                "id" => $this->category->id,
                "name" => $this->category->name,
            ],
            'product_name' => $this->product_name,
            'short_description' => $this->short_description,
            'long_description' => $this->long_description,
            'product_price' => $this->product_price,
            'product_quantity' => $this->product_quantity,
            'rating' => $this->rating,
            'total_rating' => $this->total_rating,
            'product_image' => $this->product_image
        ];
    }
}
