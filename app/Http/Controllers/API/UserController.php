<?php

namespace App\Http\Controllers\API;

use session;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request){
         $credentials = [
            'email' =>  $request ->email,
            'password' => $request->password
         ];

         if(Auth::attempt($credentials)){
            $success = true;
            $message = "User Login Successfully";
         } else {
            $success = false;
            $message = "Unauthorised";
         }

         $response = [
            'succeess' => $success,
            'message' => $message
         ];


         return response()->json($response);
    }


    public function register (Request $request){
        try {
            $user = new User();
            $user-> name = $request->name;
            $user-> email = $request->email;
            $user-> password = Hash::make($request->password);
            $user->save();

            $success = true;
            $message = "User register successfully";

        } catch (\Illuminate\Database\QueryException $ex) {
            $success = false;
            $message = $ex->getMessage();

        }

        $response = [
            'succeess' => $success,
            'message' => $message
         ];


         return response()->json($response);

    }


    public function logout (Request $request){
        try {
            Session::flush();
            $success = true;
            $message = " Logout Successfully";
        } catch (\Illuminate\Database\QueryException $ex) {
            $success = false;
            $message = $ex->getMessage();
        }


        $response = [
            'succeess' => $success,
            'message' => $message
         ];


         return response()->json($response);

    }
}
