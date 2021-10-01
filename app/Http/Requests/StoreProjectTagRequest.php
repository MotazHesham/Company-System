<?php

namespace App\Http\Requests;

use App\Models\ProjectTag;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreProjectTagRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('project_tag_create');
    }

    public function rules()
    {
        return [
            'tag' => [
                'string',
                'required',
            ],
        ];
    }
}
