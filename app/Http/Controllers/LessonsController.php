<?php

    namespace App\Http\Controllers;

    use App\Models\Lesson;
    use Illuminate\Http\Request;

    class LessonsController extends Controller {

        public function index()
        {
            return view('admin.lessons.index');
        }


    }
