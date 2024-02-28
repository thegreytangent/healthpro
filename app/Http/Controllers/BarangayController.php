<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class BarangayController extends Controller
    {
        public function index() {
            return view('barangay.index');
        }

        public function create() {
            return view('barangay.create');
        }

        public function show($id) {
            return view('barangay.edit');
        }

        public function store(Request $request)  {
            return $request->all();
        }
    }
