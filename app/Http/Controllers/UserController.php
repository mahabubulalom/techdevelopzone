<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;




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


        function user_photo_update(Request $request){
            $request->validate([
                'profil_photo'=>'required',
                'profil_photo'=>'mimes:jpg,png,jpeg',
                'profil_photo'=>'max:1024',
            ]);

            if(Auth::user()->image !=null){
                $delet_from = public_path('uploads/user/'.Auth::user()->image);
                unlink($delet_from);
            }

            $photo = $request->profil_photo;
            $manager = new ImageManager(new Driver());
            $extension = $photo->extension();
            $img = $manager->read($photo);
            $file_name = Auth::id().'.'.$extension;


            $img->save(public_path('uploads/user/' . $file_name));

            User::find(Auth::id())->update([
                'image' =>  $file_name,
            ]);


            // Image::make($photo)->resize(300, 400)->save(public_path('uploads/user/'.$file_name));

            return back()->with('photo_success', 'Profile photo updated successfully!');

        }












    // public function password_update(Request $request){
    //     $request->validate([
    //         'current_password' => ['required'],
    //         'new_password' => ['required', 'min:8', 'confirmed'],
    //     ], [
    //         'current_password.required' => 'Current password is required.',
    //         'new_password.required' => 'New password is required.',
    //         'new_password.min' => 'New password must be at least 8 characters.',
    //         'new_password.confirmed' => 'Password confirmation does not match.',
    //     ]);

    //     $user = Auth::user();

    //     // Check if current password is correct
    //     if (!Hash::check($request->current_password, $user->password)) {
    //         return back()->with(['curnt' => 'Current password is incorrect.']);
    //     }

    //     // Update password in users table
    //     $user->password = Hash::make($request->new_password);
    //     $user->save();

    //     return back()->with('pass_success', 'Your password has been updated successfully.');
    // }














    // public function password_update(Request $request)
    // {
    //     // Step 1: Validate input
    //     $request->validate([
    //         'current_password' => ['required'],
    //         'new_password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ], [
    //         'current_password.required' => 'Current password is required.',
    //         'new_password.required' => 'New password is required.',
    //         'new_password.min' => 'New password must be at least 8 characters.',
    //         'new_password.confirmed' => 'Password confirmation does not match.',
    //     ]);

    //     // Step 2: Get current user
    //     $user = Auth::user();

    //     // Step 3: Check if current password matches
    //     if (!Hash::check($request->current_password, $user->password)) {
    //         return back()->withErrors(['current_password' => 'Current password is incorrect.']);
    //     }

    //     // Step 4: Update password
    //     $user->password = Hash::make($request->new_password);
    //     $user = Auth::user();

    //     // Step 5: Success message
    //     return back()->with('pass_success', 'Password updated successfully.');
    // }




        // return back()->with('success', 'password updated successfully!');




}
