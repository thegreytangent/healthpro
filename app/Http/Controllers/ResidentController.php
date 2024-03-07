<?php

    namespace App\Http\Controllers;

    use App\Models\Address;
    use App\Models\Resident;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;

    class ResidentController extends Controller
    {
        public function index()
        {
            return view('resident.index');
        }

        public function create()
        {
            $addresses = Address::all();
            $roles     = family_roles();

            return view('resident.create')->with([
                'addresses' => $addresses,
                'roles'     => $roles
            ]);
        }

        public function store(Request $req)
        {
            $val = Validator::make($req->all(), [
                'firstname'   => 'required',
                'lastname'    => 'required',
                'birthdate'   => 'required',
                'family_role' => 'required',
                'address'     => 'required'
            ]);

            if ($val->fails()) {
                return redirectWithErrors($val);
            }

            Resident::create([
                'firstname'   => $req->input('firstname'),
                'lastname'    => $req->input('lastname'),
                'birthdate'   => $req->input('birthdate'),
                'family_role' => $req->input('family_role'),
                'address_id'  => $req->input('address'),
            ]);


            return redirectWithAlert('/purok', [
                'alert-success' => 'New resident has been added!'
            ]);
        }
    }
