<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class IllnessController extends Controller
    {
        public function index() {
            return view('illness.index');
        }
    }
