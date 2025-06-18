<?php

namespace App\Repositories\Read\Product;

use App\Services\Product\Dto\GetProductPricesDto;
use Illuminate\Support\Collection;

interface GetProductPricesRepositoryInterface
{
    public function getProductsWithFormattedPrice(GetProductPricesDto $dto): Collection;
}
