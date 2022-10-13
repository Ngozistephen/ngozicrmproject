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
        $status = 200;
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
            $status = 400;
         }

         $response = [
            'succeess' => $success,
            'message' => $message
         ];


         return response()->json($response, $status);
    }


    public function register (Request $request){

        $status = 201;
        try {
            $user = new User();
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            $success = true;
            $message = "User register successfully";

        } catch (\Illuminate\Database\QueryException $ex) {
            $success = false;
            $message = $ex->getMessage();
            $status = 400;

        }

        $response = [
            'succeess' => $success,
            'message' => $message
         ];


         return response()->json($response, $status);

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
