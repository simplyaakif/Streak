<?php

    namespace App\Http\Controllers;

    use App\Models\Discussion;
    use Illuminate\Http\Request;

    class DiscussionsController extends Controller {

        public function index()
        {
            $discs = Discussion::latest()->limit(10)->get();
            return view('student.discussions',compact(['discs']));
        }

        public function create()
        {
            //
        }

        public function store(Request $request)
        {
            //
        }

        public function show(Discussion $discussion)
        {
            //
        }

        public function edit(Discussion $discussion)
        {
            //
        }

        public function update(Request $request, Discussion $discussion)
        {
            //
        }

        public function destroy(Discussion $discussion)
        {
            //
        }
    }
