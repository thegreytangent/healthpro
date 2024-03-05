<?php

    namespace App\Http\Controllers;

    use App\Models\Address;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Session;
    use Illuminate\Support\Facades\Validator;

    class PurokController extends Controller
    {
        public function index()
        {


            $addresses = Address::with(['Barangay'])->get();


            return view('purok.index')->with([
                'addresses' => $addresses
            ]);
        }

        public function create()
        {
            $barangays = DB::table('barangays')->get();

            return view('purok.create')->with([
                'barangays' => $barangays
            ]);
        }

        public function show($id)
        {
            return view('purok.edit');
        }

        public function store(Request $request)
        {


            $val = Validator::make($request->all(), [
                'barangay'   => 'required',
                'purok_name' => 'required'
            ]);

            if ($val->fails()) {
                return redirectWithErrors($val);
            }

            Address::create([
                'brgy_id' => $request->barangay,
                'prk'     => $request->purok_name,
            ]);


            return  redirectWithAlert('/purok', [
                'alert-success' => 'New Purok has been added!'
            ]);
        }

        public function destroy($id) {
            Address::find($id)->delete();

            Session::flash('alert-danger', 'Purok has been deleted successfully.');

            return response()->json([
                'success' => true
            ]);
        }




    }
