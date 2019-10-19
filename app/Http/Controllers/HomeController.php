<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\States;
use App\MyFacades\Facades\LocationFacades;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        // $data = LocationFacades::getallData()->records;
        // foreach ($data as $key => $value) {
        //     $flight = Location::create(collect($value)->toArray());
        // }

        $fields = [
            "statename" => $request->input('statename'),
            "pincode" => $request->input('pincode'),
            "districtname" => $request->input('districtname'),
            "divisionname" => $request->input('divisionname'),
        ];
        $query = Location::query();
         foreach ($fields as $key => $value) {
            if ($value) {
                $query = $query->where($key, '=', $value);
            }
        }
        
        $states = DB::table('locations')->select('statename')->groupBy('statename')->get();
        $pincodes = DB::table('locations')->select('pincode')->groupBy('pincode')->get();

        $districts = DB::table('locations')->select('districtname')->groupBy('districtname')->get();
        $divisions = DB::table('locations')->select('divisionname')->groupBy('divisionname')->get();

        $lists = $query->paginate(10);
        $lists->appends($fields)->links();
        return view('list', compact('lists', 'states', 'pincodes', 'districts', 'divisions'));
    }

    public function list(Request $request){
        

    }
}
