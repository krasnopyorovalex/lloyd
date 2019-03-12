<?php

namespace Domain\Icon\Requests;

use App\Http\Requests\Request;

/**
 * Class CreateIconRequest
 * @package Domain\Icon\Requests
 */
class CreateIconRequest extends Request
{
    public function rules(): array
    {
        return [
            'name' => 'required|max:512',
            'link' => 'required|string|max:127',
            'image' => 'image'
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
            'name.required' => 'Поле «Название» обязательно для заполнения',
            'link.required' => 'Поле «Ссылка» обязательно для заполнения'
        ];
    }
}
