<?php

namespace App\Http\Requests;

use App\Models\Course;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCourseRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('course_edit');
    }

    protected function rules(): array
    {
        return [
            'mediaCollections.course_featured_image' => [
                'array',
                'nullable',
            ],
            'mediaCollections.course_featured_image.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'course.title' => [
                'string',
                'required',
            ],
            'course.description' => [
                'string',
                'nullable',
            ],
        ];
    }
}
