<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PriceController\PriceController;

Route::get('/prices', [PriceController::class, 'index']);
