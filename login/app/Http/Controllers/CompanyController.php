<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Models\Tenant;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function create(){
        return view('company');

    }

    public function store(CompanyRequest $request){
        $validated=$request->validated();
        $tenant=Tenant::create($validated);
        // $tenant->createDomain(['domain'=>$request->domain]);
        $tenant->domains()->create(['domain'=>$request->domain]);

        // dd($tenant);

        return 'done';

    }
}
