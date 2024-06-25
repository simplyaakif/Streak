<?php

namespace App\Http\Requests;

use App\Models\Student;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateStudentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('student_edit');
    }

    protected function rules(): array
    {
        return [
            'mediaCollections.student_dp' => [
                'array',
                'nullable',
            ],
            'mediaCollections.student_dp.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'student.name' => [
                'string',
                'nullable',
            ],
            'student.user_id' => [
                'integer',
                'exists:users,id',
                'nullable',
            ],
            'student.father_name' => [
                'string',
                'nullable',
            ],
            'student.gender' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['gender'])),
            ],
            'student.nationality' => [
                'string',
                'nullable',
            ],
            'student.date_of_birth' => [
                'nullable',
                'date_format:' . config('project.date_format'),
            ],
            'student.cnic_passport' => [
                'string',
                'nullable',
            ],
            'student.mobile' => [
                'string',
                'nullable',
            ],
            'student.email' => [
                'email:rfc',
                'nullable',
            ],
            'mediaCollections.student_documents' => [
                'array',
                'nullable',
            ],
            'mediaCollections.student_documents.*.id' => [
                'integer',
                'exists:media,id',
            ],
        ];
    }
}
