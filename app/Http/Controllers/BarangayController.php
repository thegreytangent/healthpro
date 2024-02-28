<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;

    class BarangayController extends Controller
    {
        public function index()
        {
            return view('barangay.index');
        }

        public function create()
        {
            return view('barangay.create');
        }

        public function show($id)
        {
            return view('barangay.edit');
        }

        public function store(Request $request)
        {
            $val = Validator::make($request->all(), [
                'barangay' => 'required'
            ]);

            if ($val->fails()) {
                return redirectWithErrors($val);
            }

            return $request->all();
        }
    }
