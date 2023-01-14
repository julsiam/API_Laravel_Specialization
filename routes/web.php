<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('alan');
});


$uri = 'users';


Route::get($uri, function(){
    $one =1;
    $two =2;

    $sum = $one + $two;

    return $sum;
});


Route::get('user/{id}', function ($id) {
  
    $hi = 'Hello';
    
    return $hi. $id;
});

// Route::get('pn/{juls}/age/{age}', function ($juls, $age) {

//     return 'Welcome '. $juls. ' Your age is '.$age;
// });

Route::get('pn/{juls}/age/{age}', function ($juls, $age) {

    //array

    $users = [
        'u1',
        'u2',
        'u3'
    ];

    return view('alan', [
        'name' => $juls,
        'age' => $age,
        'userss' => $users
    ]);
});

Route::get('controller/allan', [
    UserController::class,'index',  
]);

Route::get('cont1', [
    Controller::class,'stores',
  
]);