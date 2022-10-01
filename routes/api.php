<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::get('/callback', function(Request $request){
//     $http = new GuzzleHttp\Client;

//     $response = $http->post('http://ngozicrmproject.test/oauth/token', [
//             'form_params' => [
//                 'grant_type'=> 'password',
//                 'client_id' => 2,
//                 'client_secret' => 'FPLPCus92bG7LJ72LwpWHnqUW7V5Avt6kYMP4pYe',
//                 'username' => 'uche@example.com',
//                 'password' => '1234567',
//                 'scope' => ''
//             ]
//         ]);

//        return json_decode((string) $response->getBody(), true);
// }); 

Route::middleware('auth:api')->prefix('to')->namespace('Auth')->group(function(){
    Route::get('/users', function ($id) {
        
    });
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
