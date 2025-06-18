<?php

namespace App\Services\Product\Dto;

use App\Http\Requests\GetProductPricesRequest;

class GetProductPricesDto
{
    public function __construct(public readonly string $currency) {}

    public static function fromRequest(GetProductPricesRequest $request): self
    {
        return new self($request->getCurrency());
    }
}
