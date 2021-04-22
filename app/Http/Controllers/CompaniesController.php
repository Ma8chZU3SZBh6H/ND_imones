<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
            'pavadinimas' => ['required', 'max:255'],
            'kodas' => ['required', 'numeric'],
            'pvm_kodas' => ['required', 'numeric'],
            'adresas' => ['required', 'max:255'],
            'telefonas' => ['required', 'max:255'],
            'pastas' => ['required', 'max:255', 'email'],
            'veikla' => ['required', 'max:255'],
            'vadovas' => ['required', 'max:255'],
        ]);
        Company::create($request->all());
        return redirect()->route('home');
    }

    public function delete(Company $company){
        $company->delete();
        return redirect()->route('home');
    }

    
}
