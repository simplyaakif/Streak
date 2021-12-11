<?php

    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\Models\Admin\Certificate;
    use App\Models\Batch;
    use App\Models\BatchStudent;
    use App\Models\Student;
    use Illuminate\Http\Request;

    class CertificatesController extends Controller {

        public function index()
        {
            $admissions = BatchStudent::where('batch_status', 2)->with([
                                                                           'student',
                                                                           'batch'
                                                                       ])->get();

            return view('admin.certificate.index', compact('admissions'));
        }


        public function show(Certificate $certificate)
        {
            $student = Student::findOrFail($certificate->student_id);
            $batch = Batch::findOrFail($certificate->batch_id);
            $admission = BatchStudent::findOrFail($certificate->batch_student_id);
            return view('admin.certificate.show', compact('certificate','batch','admission','student'));
        }

    }
