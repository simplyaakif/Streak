<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\StudentResource;
use App\Http\Resources\BatchStudentResource;
use App\Models\BatchStudent;
use App\Models\Student;
use Carbon\Carbon;

class MiscApiController extends Controller
{
    public function index()
    {

    }

    public function recent_admissions()
    {
        $admissions = Student::with([
            "batches" => function ($q) {
                return $q->where("batch_status", 1);
            }
        ])
            ->limit(10)
            ->latest()
            ->get()
            ->makeHidden(['mobile','email','date_of_birth','nationality','father_name','cnic_passport','guardian_id','user_id','deleted_at','created_at','updated_at','documents']);
        return new StudentResource($admissions);
    }

    public function alums()
    {
//        $alums = Student::limit(20)
//            ->latest()
//            ->with([
//                "batches" => function ($query) {
//                    return $query->where("batch_status", 2)->get();
//                }
//            ])
//            ->get()
//            ->makeHidden(['mobile','email','date_of_birth','nationality','father_name','cnic_passport','guardian_id','user_id','deleted_at','created_at','updated_at','documents']);
//        $alums = $alums->filter(function ($alum) {
//           return count($alum->batches) > 0;
//        });

        $alums = BatchStudent::latest()
            ->where("batch_status", 2)
            ->with("batch", "student")
            ->limit(20)
            ->get();

        $sorted = $alums
            ->sortBy(function ($item) {
                return Carbon::parse($item->session_end_date);
            })
            ->reverse();



        return new BatchStudentResource($sorted);

    }
}
