<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class RegisterController extends Controller
{
    public function __construct()
    {
        
    }

    public function index()
    {
        $data=null;
        return view('/auth/n_register',compact('data'));
    }

    public function show($id=null)
    {
        $data;
        if(is_null($id)){
            $data = User::all();
           
        }else{
            $data = User::find($id);
            
            if(is_null($data)){
                abort('404');
            }    
        }
     
        return view('/auth/n_register',compact('data')); 
    }

    public function store()
    {
        $data=request()->validate([
                'name'=>'required',
                'alamat'=>'required||min:8',
                'nim'=>'required',
                'phone'=>'required',
                'email'=>'required|email:rfc,dns',
                'password'=>'required',
                'repass'=>'same:password'
                
            ]);
            
        $data['role'] ='1';    
         
        // dd($data);    
        
        User::create($data);    

        return back();
    }
   
}
