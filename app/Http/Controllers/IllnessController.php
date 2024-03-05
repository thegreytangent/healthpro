<?php

    namespace App\Http\Controllers;

    use App\Models\Illness;
    use App\Models\IllnessCategory;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Session;
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
            $categories = IllnessCategory::all();
            $illness = Illness::find($id);

            return view('illness.edit')->with([
                'categories' => $categories,
                'illness' => $illness
            ]);
        }

        public function update(Request $req, $id)
        {
            $val = Validator::make($req->all(), [
                'illness_category' => 'required',
                'illness_name'     => 'required'
            ]);

            if ($val->fails()) {
                return redirectWithErrors($val);
            }

            Illness::where(['id' => $id])->update([
                'category_id'  => $req->illness_category,
                'illness_name' => $req->illness_name,
            ]);


            return redirectWithAlert('/illness', [
                'alert-info' => 'Illness has been updated!'
            ]);
        }


        public function destroy($id)
        {

            Illness::find($id)->delete();

            Session::flash('alert-danger', 'Illness has been deleted successfully.');

            return response()->json([
                'success' => true
            ]);

        }


    }
