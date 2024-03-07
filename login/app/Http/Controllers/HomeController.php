<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $employees=Employee::latest()->paginate(5);
        if(Auth::id()){
            $usertype=Auth()->user()->usertype;

            if($usertype=='user'){
                return view('dashboard');
            }elseif($usertype=='admin'){
                return view('employee',
                [
                    'employees'=>$employees,
                ]
            );
            }
        }else{
            return redirect()->back();
        }

    }
    public function post(){
        return view('post');
    }
}
