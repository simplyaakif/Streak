<?php

    namespace App\Http\Controllers\Student;

    use App\Http\Controllers\Controller;
    use App\Models\Issue;
    use Auth;
    use Illuminate\Http\Request;

    class IssuesController extends Controller {

        public function index()
        {
            $issues = Issue::where('student_id',Auth::user()->student->id)->paginate(10);
            return view('student.issues.index',compact('issues'));
        }

        public function create()
        {
            //
        }

        public function store(Request $request)
        {
            //
        }

        public function show( $id)
        {
            $issue = Issue::where('id',$id)->first();
            $issue->load('replies');

            return view('student.issues.show',compact('issue'));
        }

        public function edit(Issue $issues)
        {
            //
        }

        public function update(Request $request, Issue $issues)
        {
            //
        }

        public function destroy(Issue $issues)
        {
            //
        }
    }
