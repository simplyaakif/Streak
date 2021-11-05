<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StudentController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('student_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.student.index');
    }

    public function dashboard()
    {
        abort_if(Gate::denies('student_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $dStudent = Student::whereDate('created_at', now()->toDate())->get()->count();
        $wStudent = Student::whereBetween('created_at', [now()->startOfWeek(),now()->endOfWeek()])->get()->count();
        $mStudent = Student::whereMonth('created_at', now()->month)
            ->whereYear('created_at',now()->year)
            ->get()->count();
        $pMstudent = Student::whereMonth('created_at', now()->subMonth()->month)
            ->whereYear('created_at',now()->subMonth()->year)
            ->get()->count();

        $students = Student::latest()->take(10)->get();
        return view('admin.student.dashboard',compact('dStudent','wStudent','mStudent','pMstudent','students'));
    }

    public function create()
    {
        abort_if(Gate::denies('student_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.student.create');
    }

    public function edit(Student $student)
    {
        abort_if(Gate::denies('student_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.student.edit', compact('student'));
    }

    public function show(Student $student)
    {
        abort_if(Gate::denies('student_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $student->load('user');
        $student->load('batches');

        return view('admin.student.show', compact('student'));
    }

    public function storeMedia(Request $request)
    {
        abort_if(Gate::none(['student_create', 'student_edit']), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->has('size')) {
            $this->validate($request, [
                'file' => 'max:' . $request->input('size') * 1024,
            ]);
        }
        if (request()->has('max_width') || request()->has('max_height')) {
            $this->validate(request(), [
                'file' => sprintf(
                'image|dimensions:max_width=%s,max_height=%s',
                request()->input('max_width', 100000),
                request()->input('max_height', 100000)
                ),
            ]);
        }

        $model                     = new Student();
        $model->id                 = $request->input('model_id', 0);
        $model->exists             = true;
        $media                     = $model->addMediaFromRequest('file')->toMediaCollection($request->input('collection_name'));
        $media->wasRecentlyCreated = true;

        return response()->json(compact('media'), Response::HTTP_CREATED);
    }
}
