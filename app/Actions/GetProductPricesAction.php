<?php

namespace App\Actions;

use App\Repositories\Read\Product\GetProductPricesRepositoryInterface;
use App\Services\Product\Dto\GetProductPricesDto;
use Illuminate\Support\Collection;

class GetProductPricesAction
{
    public function __construct(
        private readonly GetProductPricesRepositoryInterface $repository
    ) {}

    public function run(GetProductPricesDto $dto): Collection
    {
        return $this->repository->getProductsWithFormattedPrice($dto);
    }
}
