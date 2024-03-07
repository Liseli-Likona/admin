<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TemplateController extends Controller
{
    public function index(User $user){
          
        return view('template',compact('user'));
    }

    public function site(){
          
        return view('site');
    }

}
