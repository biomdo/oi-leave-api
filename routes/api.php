<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LeaveTypeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\LeaveApplicationController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::apiResource('admin', AdminController::class);
Route::apiResource('department', DepartmentController::class);
Route::apiResource('employee', EmployeeController::class);
Route::apiResource('leaveApplication', LeaveApplicationController::class);
Route::apiResource('leaveType', LeaveTypeController::class);
