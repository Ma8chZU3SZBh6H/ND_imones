<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        $search = $request->search;
        if ($search == null) {
            $companies = Company::simplePaginate(6);
            return view('home', [
                'comapnies' => $companies
            ]);
        }
        else{
            $this->validate($request, [
                'search' => ['required']
            ]);
            $companies = Company::where('pavadinimas', 'like', '%'.$search.'%')->simplePaginate(6);
            return view('home', [
                'comapnies' => $companies
            ]);
        }
        
    }
}
