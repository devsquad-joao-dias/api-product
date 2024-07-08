<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'limit' => ['nullable', 'integer', 'min:1', 'max:100'],
            'randomOrder' => ['nullable', 'boolean'],
            'with' => ['nullable', 'string']
        ];
    }
}
