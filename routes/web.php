<?php

use App\Http\Controllers\AlarmController;
use App\Http\Controllers\AutomationController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ClimateController;
use App\Http\Controllers\CropsController;
use App\Http\Controllers\FertigationController;
use App\Http\Controllers\FiltersController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\InjectorsController;
use App\Http\Controllers\IrrigationController;
use App\Http\Controllers\ManualModeController;
use App\Http\Controllers\MotorsController;
use App\Http\Controllers\NutrientsController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TanksController;
use App\Http\Controllers\ValvesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
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


//Routes for Manual Mode
Route::get('/manual-mode',[ManualModeController::class, 'manual_index']);
Route::post('/manual-mode',[ManualModeController::class, 'insert_manual'])->name('manual-mode');


//Routes for Schedule
Route::get('/schedule',[ScheduleController::class, 'schedule_index'])->name('schedule');
Route::get('/add-schedule',[ScheduleController::class, 'add_schedule'])->name('add-schedule');
Route::post('/add-schedule',[ScheduleController::class, 'insert_schedule']);


//Routes for Report
Route::get('/report',[ReportController::class, 'report_index'])->name('report');
Route::post('/report',[ReportController::class, 'insert_report']);


//Routes in Settings

//Routes for Motors
Route::get('/motors',[MotorsController::class, 'motors_index'])->name('motors');
Route::get('/add-motors',[MotorsController::class, 'add_motors'])->name('add-motors');
Route::post('/add-motors',[MotorsController::class, 'insert_motors']);


//Routes for Alarm
Route::get('/alarm',[AlarmController::class, 'alarm_index'])->name('alarm');
Route::post('/alarm',[AlarmController::class, 'insert_alarm']);


//Routes for Filters
Route::get('/filters',[FiltersController::class, 'filter_index'])->name('filters');
Route::get('/add-filters',[FiltersController::class, 'add_filter'])->name('add-filters');
Route::post('/add-filters',[FiltersController::class, 'insert_filter']);


//Routes for Valves
Route::get('/valves',[ValvesController::class, 'valves_index'])->name('valves');
Route::get('/add-valves',[ValvesController::class, 'add_valves'])->name('add-valves');
Route::post('/add-valves',[ValvesController::class, 'insert_valves']);


//Routes for Fertigation Nutrients
Route::get('/fertigation-nutrients',[NutrientsController::class, 'nutrients_index'])->name('fertigation-nutrients');
Route::get('/add-fertigation-nutrients',[NutrientsController::class, 'add_nutrients'])->name('add-fertigation-nutrients');
Route::post('/add-fertigation-nutrients',[NutrientsController::class, 'insert_nutrients']);


//Routes for Tanks
Route::get('/tanks',[TanksController::class, 'tanks_index'])->name('tanks');
Route::get('/add-tanks',[TanksController::class, 'add_tanks'])->name('add-tanks');
Route::post('/add-tanks',[TanksController::class, 'insert_tanks']);


//Routes for Injectors
Route::get('/injectors',[InjectorsController::class, 'injectors_index'])->name('injectors');
Route::get('/add-injectors',[InjectorsController::class, 'add_injectors'])->name('add-injectors');
Route::post('/add-injectors',[InjectorsController::class, 'insert_injectors']);


//Routes for Crops
Route::get('/crops',[CropsController::class, 'crops_index'])->name('crops');
Route::get('/add-crops',[CropsController::class, 'add_crops'])->name('add-crops');
Route::post('/add-crops',[CropsController::class, 'insert_crops']);


//Routes for General Settings
Route::get('/general-settings',[GeneralController::class, 'general_index'])->name('general-settings');
Route::post('/general-settings',[GeneralController::class, 'insert_general']);


Route::get('/side', function () {
    return view('pages.add_climate_control');
});