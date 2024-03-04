<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
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
        return view('purok.create');
    }

    public function show($id)
    {
        return view('purok.edit');
    }

    public function store(Request $request)
    {
        $val = Validator::make($request->all(), [
            'purok' => 'required'
        ]);

        if ($val->fails()) {
            return redirectWithErrors($val);
        }

        return $request->all();
    }
}
