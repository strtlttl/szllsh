<?php

namespace App\Http\Controllers;
use App\Companies;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function index(){
        $companies = Companies::all();
        return view('index', compact('companies','companies'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request)
    {
        Companies::create([
            'companyName' => $request->companyName,
            'country' => $request->country,
            'city' => $request->city,
            'companyFoundationDate' => $request->companyFoundationDate,
            'activity' => $request->activity,
        ]);
        return redirect()->route('company.index')->with('success','Rekord hozzáadva');
    } 

    public function update(Request $request, Companies $company)
    {
        $company->update([
            'companyName' => $request->companyName,
            'country' => $request->country,
            'city' => $request->city,
            'companyFoundationDate' => $request->companyFoundationDate,
            'activity' => $request->activity,
        ]);
        return redirect()->route('company.index')->with('success','Rekord módosítva');
    } 

    public function edit(Companies $company){
        return view('edit')->with('company',$company);
    }

    public function destroy(Companies $company){
        $company->delete();
        return redirect()->route('company.index')->with('success', 'Rekord törölve');
    }
}