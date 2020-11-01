<?php

use App\Http\Controllers\BreakdownCategoryController;
use App\Http\Controllers\BreakdownStatusController;
use App\Http\Controllers\ComponentCriteriaController;
use App\Http\Controllers\EgiController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\SidebarMenuController;
use App\Http\Controllers\UnitCategoryController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
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

Route::middleware('auth:sanctum')->get('me', function (Request $request) {
    return $request->user();
});

// Route::group(['middleware' => 'auth:sanctum'], function () {
Route::get('sidebarMenu', [SidebarMenuController::class, 'index']);
Route::resource('user', UserController::class)->only(['index', 'store', 'update', 'destroy']);
Route::resource('breakdownStatus', BreakdownStatusController::class)->only(['index', 'store', 'update', 'destroy']);
Route::resource('breakdownCategory', BreakdownCategoryController::class)->only(['index', 'store', 'update', 'destroy']);
Route::resource('componentCriteria', ComponentCriteriaController::class)->only(['index', 'store', 'update', 'destroy']);
Route::resource('egi', EgiController::class)->only(['index', 'store', 'update', 'destroy']);
Route::resource('location', LocationController::class)->only(['index', 'store', 'update', 'destroy']);
Route::resource('owner', OwnerController::class)->only(['index', 'store', 'update', 'destroy']);
Route::resource('unit', UnitController::class)->only(['index', 'store', 'update', 'destroy']);
Route::resource('unitCategory', UnitCategoryController::class)->only(['index', 'store', 'update', 'destroy']);
// });
