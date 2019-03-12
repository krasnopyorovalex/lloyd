<?php

namespace Domain\Industry\Requests;

use App\Http\Requests\Request;

/**
 * Class CreateIndustryRequest
 * @package Domain\Industry\Requests
 */
class CreateIndustryRequest extends Request
{
    public function rules(): array
    {
        return [
            'name' => 'required|max:512'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Поле «Название» обязательно для заполнения'
        ];
    }
}
