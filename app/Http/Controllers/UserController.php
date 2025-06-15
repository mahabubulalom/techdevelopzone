<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    function user_edit(){
        return view('backend.user.edit');
    }
    // function user_update(){
    //     echo ('edit');
    // }
    function user_update(Request $request){

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' ,
        ],[
            'email.unique'=>'this email already have'
        ]);

        User::find(Auth::id())->update([
            'name'=> $request->name,
            'email'=> $request->email,
        ]);

        return back()->with('success', 'Profile updated successfully!');
    }



    function password_update(Request $request){
        $request->validate([
            'current_password'=>'required',
            'new_password'=>['required'=> 'confirmed', Password::min(8)->letters()->mixedCase()->numbers()->symbols()],
            'password_confirmation'=>'required',
        ]);
        if(password_verify($request->current_password, Auth::user()->password)){
            User::find(Auth::id())->update([
                'password'=>bcrypt($request->password)
            ]);
            return back()->with('pass_success', 'Password Updated Successfully');
        }
        else{
            return back()->with('curnt', 'current password is wrong');
        }
    }





        // return back()->with('success', 'password updated successfully!');




}
