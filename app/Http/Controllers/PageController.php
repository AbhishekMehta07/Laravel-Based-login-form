<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\student;
use App\Models\user_details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    //form
    public function details()
    {
        return view('welcome');
    }


    //submitted page
    public function submitted()
    {
        return view('sub');
    }


    //input values from user
    public function store(Request $request)
    {
        student::create([
            'name' => $request->input('name'),
            'email' => Auth::user()->email,
            'age' => $request->input('age'),
            'phone_num' => $request->input('phone_num'),
        ]);
        return redirect('/submit');
    }



    //show table 
    public function show(Request $request)
    {
        $studs=student::where('email', Auth::user()->email)->get();
        return view('table',['data' => $studs]);
    }



    //edit data
    public function edit()
    {
        $student = Student::where('email', Auth::user()->email)->first();
        Auth::user()->value1 = 'hello';
        return view('edit', compact('student'));
    }




    //update data
    public function update(Request $request)
    {
        $student = Student::where('email',Auth::user()->email)->first();

        $student->name = $request->input('name');
        $student->age = $request->input('age');
        $student->phone_num = $request->input('phone_num');
        $student->email = $request->input('email');

        $student->save();

        return view('update');
    }



    //detele record
    public function delete()
    {
        student::destroy(Auth::user()->id);
        return redirect('/data');
    }


    //login page
    public function authentication()
    {
        Auth::logout();
        return view('/authen/login');
    }


    // signup page
    public function reg()
    {
        return view('/authen/register');
    }


    //enter signup id and pass
    public function checkReg(Request $request)
    {
        $data=$request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=> 'required|confirmed'
        ]);   


        $user= user_details::create($data);

        if($user){
            return redirect()->route('auth');
        }

    }

    

    //check credentials
    public function checkLog(Request $request)
    {
        $data=$request->validate([
            'email'=>'required|email',
            'password'=> 'required'
        ]); 
        
        if(Auth::attempt($data))
        {
            return redirect()->route('form');
        }
        else{
            return redirect()->route('crash');
        }
    }


    //wrong credentials
     public function wrong()
     {
        return view('authen/crash');
     }
}
