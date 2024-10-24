<?php

namespace App\Http\Resources;

use App\Models\BatchStudent;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin BatchStudent */
class BatchStudentResource extends JsonResource
{
    public function toArray(Request $request): array
    {
//        return [
//            'id' => $this->id,
//            'session_start_date' => $this->session_start_date,
//            'session_end_date' => $this->session_end_date,
//            'batch_status' => $this->batch_status,
//            'created_at' => $this->created_at,
//            'updated_at' => $this->updated_at,
//            'status_comments' => $this->status_comments,
//            'status' => $this->status,
//            'recoveries_count' => $this->recoveries_count,
//
//            'batch_id' => $this->batch_id,
//            'student_id' => $this->student_id,
//        ];
        return parent::toArray($request);
    }
}
