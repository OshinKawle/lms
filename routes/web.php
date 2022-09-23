<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;

#Master Controller Call
use App\Http\Controllers\Admin\Master\UnivercityController;

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



#End Route Web
Route::get('/', function () {
    return view('auth.login');
});


 
 Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

#Start Admin Routes
Route::group([ 'prefix'=>'team','middleware' =>['auth'] ], function()
{

    #Start route user 
        Route::resource('roles', RoleController::class);
        Route::resource('users', UserController::class); 
         Route::get('users/delete/{id}', [UserController::class, 'destroy']);
        Route::get('users/changestatus/{id}', [UserController::class, 'changeStatus']);
    
    #End route user

  });
#End Admin Routes



#Start Master Routes

Route::group([ 'prefix'=>'master','middleware' =>['auth'] ], function()
{

    #Start route university 
        Route::resource('university', UnivercityController::class);
    #End route university
        

  });
#End Master Routes

