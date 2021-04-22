<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $companies = Company::simplePaginate(6);
        return view('home', [
            'comapnies' => $companies
        ]);
    }
    public function show(Request $request){
        $this->validate($request, [
            'search' => ['required']
        ]);
        $search = $request->search;
        
        $companies = Company::where('pavadinimas', 'like', '%'.$search.'%')->get();
        return view('home', [
            'comapnies' => $companies
        ]);
    }
}
