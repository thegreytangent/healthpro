<?php

    namespace App\Http\Controllers;

    use App\Models\Illness;
    use App\Models\Resident;
    use App\Models\ResidentIllness;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Session;
    use Illuminate\Support\Facades\Validator;

    class ResidentIllnessController extends Controller
    {

        public function index()
        {
            $resident_illness = ResidentIllness::all();

            return view('resident-illness.index')->with([
                'resident_illness' => $resident_illness
            ]);
        }

        public function create()
        {

            $residents = Resident::all();
            $illnesses = Illness::all();

            return view('resident-illness.create')->with([
                'residents' => $residents,
                'illnesses' => $illnesses
            ]);
        }


        public function store(Request $req)
        {

            $val = Validator::make($req->all(), [
                'date'     => 'required',
                'resident' => 'required',
                'illness'  => 'required',
            ]);

            if ($val->fails()) {
                return redirectWithErrors($val);
            }

            ResidentIllness::create([
                'date'        => $req->input('date'),
                'illness_id'  => $req->input('illness'),
                'resident_id' => $req->input('resident'),
            ]);

            return redirectWithAlert('/resident-illness', [
                'alert-success' => 'New resident illness has been added!'
            ]);


        }

        public function show($id)
        {
            $resident_illness = ResidentIllness::find($id);
            $residents        = Resident::all();
            $illnesses        = Illness::all();

            return view('resident-illness.edit')->with([
                'r'         => $resident_illness,
                'residents' => $residents,
                'illnesses' => $illnesses
            ]);
        }

        public function update(Request $req, $id) {

            $val = Validator::make($req->all(), [
                'date'     => 'required',
                'resident' => 'required',
                'illness'  => 'required',
            ]);

            if ($val->fails()) {
                return redirectWithErrors($val);
            }

            ResidentIllness::find($id)->update([
                'date'        => $req->input('date'),
                'illness_id'  => $req->input('illness'),
                'resident_id' => $req->input('resident'),
            ]);

            return redirectWithAlert('/resident-illness', [
                'alert-info' => 'Resident illness has been updated!'
            ]);



        }

        public function destroy($id)
        {
            ResidentIllness::find($id)->delete();

            Session::flash('alert-danger', 'Resident illness has been deleted successfully.');

            return response()->json([
                'success' => true
            ]);
        }



    }
