<?php

    namespace App\Http\Controllers;

    use App\Models\Barangay;
    use Illuminate\Http\RedirectResponse;
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

            $barangay = Barangay::find($id);

            return view('barangay.edit')->with([
                'barangay' => $barangay
            ]);
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


        public function update(Request $req, $id): RedirectResponse
        {
            Barangay::where(['id' => $id])->update([
                'brgy_name' => $req->barangay
            ]);



            return  redirectWithAlert('/barangay', [
                'alert-info' => 'Barangay has been updated!'
            ]);
        }
    }
