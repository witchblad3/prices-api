<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GetProductPricesRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'currency' => 'nullable|in:RUB,USD,EUR',
        ];
    }

    public function getCurrency(): string
    {
        return strtoupper($this->get('currency', 'RUB'));
    }
}

