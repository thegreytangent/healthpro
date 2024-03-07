<?php

    namespace App\Http\Controllers;

    use App\Models\Address;
    use App\Models\Barangay;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Session;
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

            Barangay::create([
                'brgy_name' => $request->barangay
            ]);

            return  redirectWithAlert('/barangay', [
                'alert-success' => 'New Barangay has been added!'
            ]);
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

        public function destroy($id) {

            Barangay::find($id)->delete();

            Session::flash('alert-danger', 'Barangay has been deleted successfully.');

            return response()->json([
                'success' => true
            ]);

        }
    }
