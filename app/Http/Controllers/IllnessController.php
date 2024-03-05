<?php

    namespace App\Http\Controllers;

    use App\Models\Illness;
    use App\Models\IllnessCategory;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;
    use Illuminate\View\View;

    class IllnessController extends Controller
    {
        public function index() : View
        {
            $illness = Illness::all();

            return view('illness.index')->with([
                'illnesses' => $illness
            ]);
        }

        public function create() : View
        {

            $categories = IllnessCategory::all();

            return view('illness.create')->with([
                'categories' => $categories
            ]);
        }

        public function store(Request $req) : RedirectResponse
        {
            $val = Validator::make($req->all(), [
                'illness_category' => 'required',
                'illness_name'     => 'required'
            ]);

            if ($val->fails()) {
                return redirectWithErrors($val);
            }

            Illness::create([
                'category_id'  => $req->illness_category,
                'illness_name' => $req->illness_name,
            ]);


            return redirectWithAlert('/illness', [
                'alert-success' => 'New Illness has been added!'
            ]);


        }

        public function show($id)
        {

        }

        public function update(Request $req)
        {

        }


        public function destroy($id)
        {

        }


    }
