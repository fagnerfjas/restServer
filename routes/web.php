<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;

Route::get('/', function () {
    //return view('welcome');
    $query = http_build_query([
        'client_id' => 3,
        'redirect_uri' => 'http://localhost:9999/callback',
        'response_type' => 'code',
        'scope' => ''
    ]);

    return redirect("http://localhost:8000/oauth/authorize?$query");
});

Route::get('callback', function(Request $request){
    $code = $request->get('code');
    $http = new \GuzzleHttp\Client();

    $resposta = $http->post('http://localhost:8000/oauth/token', [
        'form_params' => [
            'client_id' => 3,
            'client_secret' => 'iZgux4SVFJ3qESIH62aTeDdUPwu4mJ1GHSfIcZKs',
            'redirect_uri' => 'http://localhost:9999/callback',
            'code' => $code,
            'grant_type' => 'authorization_code'
        ]
    ]);

    dd(json_decode($resposta->getBody(), true));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
