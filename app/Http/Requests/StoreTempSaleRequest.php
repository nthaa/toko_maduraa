<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTempSaleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $this->merge([
            'total' => $this->input('jumlah') * $this->input('harga')
        ]);

        return [
            //
            'nama' => 'required|max:50',
            'jumlah' => 'required|integer|min:1',
            'harga' => 'required|numeric|min:0',
            'total' => 'required|numeric|min:0',
        ];
    }
}
