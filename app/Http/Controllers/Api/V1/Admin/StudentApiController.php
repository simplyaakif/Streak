<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Http\Resources\Admin\StudentResource;
use App\Models\Student;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StudentApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('student_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new StudentResource(Student::with(['user'])->get());
    }

    public function store(StoreStudentRequest $request)
    {
        $student = Student::create($request->validated());

        if ($request->input('dp', false)) {
            $student->addMedia(storage_path('tmp/uploads/' . basename($request->input('dp'))))->toMediaCollection('dp');
        }

        if ($request->input('documents', false)) {
            $student->addMedia(storage_path('tmp/uploads/' . basename($request->input('documents'))))->toMediaCollection('documents');
        }

        return (new StudentResource($student))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Student $student)
    {
        abort_if(Gate::denies('student_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new StudentResource($student->load(['user']));
    }

    public function update(UpdateStudentRequest $request, Student $student)
    {
        $student->update($request->validated());

        if ($request->input('dp', false)) {
            if (!$student->dp || $request->input('dp') !== $student->dp->file_name) {
                if ($student->dp) {
                    $student->dp->delete();
                }
                $student->addMedia(storage_path('tmp/uploads/' . basename($request->input('dp'))))->toMediaCollection('dp');
            }
        } elseif ($student->dp) {
            $student->dp->delete();
        }

        if ($request->input('documents', false)) {
            if (!$student->documents || $request->input('documents') !== $student->documents->file_name) {
                if ($student->documents) {
                    $student->documents->delete();
                }
                $student->addMedia(storage_path('tmp/uploads/' . basename($request->input('documents'))))->toMediaCollection('documents');
            }
        } elseif ($student->documents) {
            $student->documents->delete();
        }

        return (new StudentResource($student))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Student $student)
    {
        abort_if(Gate::denies('student_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $student->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
