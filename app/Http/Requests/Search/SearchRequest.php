<?php

namespace App\Http\Requests\Search;

use Illuminate\Foundation\Http\FormRequest;

class SearchRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'text' => 'string|nullable',
            'rewards' => 'numeric|nullable',
            'list_skill_id' => 'numeric|exists:list_skills,id|nullable'
        ];
    }

    public function attributes()
    {
        return [
            'text' => 'texto',
            'rewards' => 'valorizacion'
        ];
    }
}
