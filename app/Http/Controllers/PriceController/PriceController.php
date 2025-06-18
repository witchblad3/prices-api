<?php
namespace App\Http\Controllers\PriceController;

use App\Actions\GetProductPricesAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\GetProductPricesRequest;
use App\Http\Resources\ProductResource;
use App\Services\Product\Dto\GetProductPricesDto;

class PriceController extends Controller
{
    public function index(
        GetProductPricesRequest $request,
        GetProductPricesAction $action,
    )
    {
        $dto = GetProductPricesDto::fromRequest($request);
        $products = $action->run($dto);
        return ProductResource::collection($products);
    }
}
