<?php

#Other Classes
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

#Start Inialize Controller for Customer

use App\Http\Controllers\API\UserController;

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

    #Custome Login Route
    Route::post('login', [UserController::class, 'login']);
    Route::POST('forget-password', [UserController::class, 'forgetPassword']);
    Route::POST('new-password', [UserController::class, 'newPassword']);
    Route::POST('customer-otp', [UserController::class, 'customerotp']);
    #Custome Logi route end



 


