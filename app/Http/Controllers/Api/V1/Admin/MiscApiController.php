<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\StudentResource;
use App\Models\Student;

class MiscApiController extends Controller
{
    public function index()
    {

    }

    public function recent_admissions()
    {
        $admissions = Student::with('batches')->limit(10)->latest()->get();
        return new StudentResource($admissions);
    }
}
