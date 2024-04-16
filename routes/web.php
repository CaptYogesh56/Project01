<?php

use App\Http\Controllers\AutomationController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ClimateController;
use App\Http\Controllers\FertigationController;
use App\Http\Controllers\IrrigationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('register');
});

//Routes for registration
Route::get('/register',[RegisterController::class, 'index']);
Route::post('/register',[RegisterController::class, 'register'])->name('register');

//Routes for login
Route::get('/login',[RegisterController::class, 'loginindex']);
Route::post('/login',[RegisterController::class, 'login'])->name('login');

//Routes for Forget password
Route::get('/forget-password',[ForgotPasswordController::class, 'index']);
Route::post('/forget-password',[ForgotPasswordController::class, 'forgotpass'])->name('forget-password');

//Routes for reset password
Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'resetpasslink'])->name('reset-password');
Route::post('/reset-password', [ForgotPasswordController::class, 'resetpass'])->name('resetpassword');


//Routes for Climate Control
Route::get('/climate-control',[ClimateController::class, 'climate_control_index'])->name('climate-control');
Route::get('/add-climate-control',[ClimateController::class, 'add_climate_control'])->name('add-climate-control');
Route::post('/add-climate-control',[ClimateController::class, 'insert_climate_control']);


//Routes for Irrigation
Route::get('/irrigation',[IrrigationController::class, 'irrigation_index'])->name('irrigation');
Route::get('/add-irrigation',[IrrigationController::class, 'add_irrigation'])->name('add-irrigation');
Route::post('/add-irrigation',[ClimateController::class, 'insert_irrigation']);

//Routes for Fertigation
Route::get('/fertigation',[FertigationController::class, 'fertigation_index'])->name('fertigation');
Route::get('/add-fertigation1',[FertigationController::class, 'add_fertigation1'])->name('add-fertigation1');
Route::get('/add-fertigation2',[FertigationController::class, 'add_fertigation2'])->name('add-fertigation2');
Route::post('/add-fertigation',[FertigationController::class, 'insert_fertigation']);


//Routes for Automation Mode
Route::get('/automation1',[AutomationController::class, 'automation_mode1'])->name('automation1');
Route::get('/automation2',[AutomationController::class, 'automation_mode2'])->name('automation2');
Route::get('/automation3',[AutomationController::class, 'automation_mode3'])->name('automation3');
Route::get('/automation4',[AutomationController::class, 'automation_mode4'])->name('automation4');
Route::post('/add-automation',[AutomationController::class, 'insert_automation'])->name('add-automation');

Route::get('/side', function () {
    return view('pages.add_climate_control');
});