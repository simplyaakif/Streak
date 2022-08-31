<?php

    namespace App\Http\Controllers;


    class HomeTaskController extends Controller {

        public function index()
        {
            return view('admin.home.index');
        }
    }
