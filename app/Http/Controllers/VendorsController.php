<?php

    namespace App\Http\Controllers;

    use App\Models\Vendor;
    use Illuminate\Http\Request;

    class VendorsController extends Controller {

        public function index()
        {
            return view('admin.finance.vendor.index');
        }

        public function create()
        {
            //
        }

        public function store(Request $request)
        {
            //
        }

        public function show(Vendor $vendor)
        {
            //
        }

        public function edit(Vendor $vendor)
        {
            //
        }

        public function update(Request $request, Vendor $vendor)
        {
            //
        }

        public function destroy(Vendor $vendor)
        {
            //
        }
    }
