<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id'    => $this->id,
            'title' => $this->title,
            'price' => $this->formatted_price ?? $this->price,
        ];
    }
}
