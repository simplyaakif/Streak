<?php

    namespace App\Http\Controllers;

    use App\Models\Recovery;
    use Illuminate\Http\Request;

    class RecoveriesController extends Controller {

        public function index()
        {
            return view('admin.recovery.index');
        }

        public function recovery()
        {
            return view('admin.recovery.recovery');
        }

        public function create()
        {
            //
        }

        public function store(Request $request)
        {
            //
        }

        public function show(Recovery $recovery)
        {
            //
        }

        public function edit(Recovery $recovery)
        {
            //
        }

        public function update(Request $request, Recovery $recovery)
        {
            //
        }

        public function destroy(Recovery $recovery)
        {
            //
        }
    }
