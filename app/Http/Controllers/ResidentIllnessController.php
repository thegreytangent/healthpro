<?php

    namespace App\Http\Controllers;

    use App\Models\Illness;
    use App\Models\Resident;
    use App\Models\ResidentIllness;
    use Illuminate\Http\Request;

    class ResidentIllnessController extends Controller
    {

        public function index()
        {
            $resident_illness = ResidentIllness::all();

            return view('resident-illness.index')->with([
                'resident_illness' => $resident_illness
            ]);
        }

        public function create() {

            $residents = Resident::all();
            $illnesses = Illness::all();

            return view('resident-illness.create');
        }
    }
