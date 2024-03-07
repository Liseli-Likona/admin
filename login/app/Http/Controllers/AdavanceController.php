<?php

namespace App\Http\Controllers;
use App\Http\Requests\AdvanceRequest;
use App\Models\Employee;
use App\Models\Adavance;
use App\Mail\ApprovalMail;
use Illuminate\Support\Facades\Mail;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as FacadesMail;

class AdavanceController extends Controller
{
    public function store( AdvanceRequest $request,Employee $employee){
        $count=Adavance::count();
        // dd($count);
        if($count >=3){
            return 'you ve reached your limit.contact techworld for an upgrade';
        }else{

        
        $validated= $request->validated();
        $validated['employee_id']=$employee->id;
        $validated['name']=$employee->name;

      $adavance=  Adavance::create($validated);
        
            $email='lylzjay@gmail.com';
           $data=[
            'subject' =>'salary adavance application for'.' '.$adavance->name,
            'name'=>$adavance->name,


        ];
        Mail::to($email)->send(new ApprovalMail($data));

        return redirect()->route('adavances.index');
    }

    }

    public function index(){

        $adavances=Adavance::latest()->paginate(5);

        return view('showadavances',
        [
            'adavances'=>$adavances,
        ]
    );


    }
}
