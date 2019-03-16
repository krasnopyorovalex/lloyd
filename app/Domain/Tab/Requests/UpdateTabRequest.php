<?php

namespace Domain\Tab\Requests;

use App\Http\Requests\Request;

/**
 * Class UpdateTabRequest
 *
 * @package Domain\Tab\Requests
 */
class UpdateTabRequest extends Request
{
    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'bail|required|max:255',
            'text' => 'string|nullable'
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
