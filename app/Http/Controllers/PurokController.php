<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class PurokController extends Controller
{
    public function index()
    {
        return view('purok.index');
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
