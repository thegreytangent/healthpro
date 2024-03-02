<?php

    namespace App\Http\Controllers;

    use App\Models\Barangay;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;

    class BarangayController extends Controller
    {
        public function index()
        {

            $barangays = Barangay::all();

            return view('barangay.index')->with([
                'barangays' => $barangays
            ]);
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
