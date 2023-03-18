<?php

namespace App\Http\Requests;

use App\Models\Query;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreQueryRequest extends FormRequest
{
    public function authorize()
    {
//        return Gate::allows('query_create');
//        dd(Gate::allows('query_create'));
        return true;
    }

    protected function rules(): array
    {
        return [
            'mediaCollections.query_dp' => [
                'array',
                'nullable',
            ],
            'mediaCollections.query_dp.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'query.name' => [
                'string',
                'required',
            ],
            'query.mobile' => [
                'string',
                'required',
            ],
            'query.email' => [
                'email:rfc',
                'nullable',
            ],
            'query.address' => [
                'string',
                'nullable',
            ],
        ];
    }
}
