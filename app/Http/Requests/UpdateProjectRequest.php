<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

// Helpers
use Illuminate\Validation\Rule;

class UpdateProjectRequest extends FormRequest
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
            'title' => ['required',
                        Rule::unique('projects')->ignore($this->project),
                        'max:64',
                        ],
            'type' => ['required',
                        Rule::in(['public','private'])
                    ],
            'img' => 'nullable|image|max:2048',
            'delete_img' => 'nullable'
        ];
    }
}
