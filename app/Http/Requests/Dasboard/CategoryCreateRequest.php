<?php

namespace App\Http\Requests\Dasboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryCreateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string',
            'excerpt' => 'nullable|string',
            'description' => 'nullable|string',
            'body' => 'nullable|string',
            'live' => 'required',
            'popular' => 'nullable',
            'parent_id' => 'nullable|exists:categories,id'
        ];
    }
}
