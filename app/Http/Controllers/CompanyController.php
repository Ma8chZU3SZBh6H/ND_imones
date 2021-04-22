<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function show(Company $company){
        return view('company',[
            'company'=>$company
        ]);
    }

    public function store(Request $request, Company $company){
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
        
        $company->pavadinimas = $request->pavadinimas;
        $company->kodas = $request->kodas;
        $company->pvm_kodas = $request->pvm_kodas;
        $company->adresas = $request->adresas;
        $company->telefonas = $request->telefonas;
        $company->pastas = $request->pastas;
        $company->veikla = $request->veikla;
        $company->veikla = $request->veikla;
        $company->vadovas = $request->vadovas;
        $company->save();

        return redirect()->route('home');
    }
}
