<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\User;
use Faker\Provider\ar_EG\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
 
    public function autocompleteSearch(Request $request)
    {
          $query = $request->get('query');
          $filterResult = Companies::where('name', 'LIKE', '%'. $query. '%')->get();
          return response()->json($filterResult);
    }
    public function show(Request $request)
    {
        if($request->input('search')){
            $company_name=$request->input('search');
            $company=Companies::where('name',$company_name)->first();
            return view('companies.show',compact('company'));
        }
    }
    public function update(Request $request)
    {dd($request->input());
    }
}
