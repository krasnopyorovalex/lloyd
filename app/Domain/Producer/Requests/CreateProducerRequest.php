<?php

namespace Domain\Producer\Requests;

use App\Http\Requests\Request;

/**
 * Class CreateProducerRequest
 * @package Domain\Producer\Requests
 */
class CreateProducerRequest extends Request
{
    public function rules(): array
    {
        return [
            'alias' => 'bail|required|unique:producers|max:64',
            'name' => 'required|max:512',
            'name_little' => 'required|max:512',
            'title' => 'required|string|max:512',
            'description' => 'string|max:512',
            'text' => 'string|nullable',
            'about' => 'string|nullable',
            'preview' => 'string|nullable',
            'image' => 'image',
            'icon' => 'image',
            'pos' => 'integer|min:0|max:255'
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
            'name_little.required' => 'Поле «Короткое название бренда» обязательно для заполнения',
            'title.required' => 'Поле «Title» обязательно для заполнения',
            'alias.required' => 'Поле «Alias» обязательно для заполнения',
            'alias.unique' => 'Значение поля «Alias» уже присутствует в базе данных',
        ];
    }
}
