<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\TncController;
use App\Http\Controllers\API\CutiController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\KelasController;
use App\Http\Controllers\API\BannerController;
use App\Http\Controllers\API\ArticleController;
use App\Http\Controllers\API\SettingController;
use App\Http\Controllers\API\TrainerController;
use App\Http\Controllers\API\VoucherController;
use App\Http\Controllers\API\LocationController;
use App\Http\Controllers\API\PackagedController;
use App\Http\Controllers\API\JadwalkelasController;
use App\Http\Controllers\API\TransactionController;
use App\Http\Controllers\API\NotificationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('user', [UserController::class, 'fetch']);
    Route::post('logout', [UserController::class, 'logout']);
    Route::post('update/user', [UserController::class, 'updateProfile']);
    Route::post('user/photo', [UserController::class, 'updatePhoto']);
    Route::post('cuti/tambah', [CutiController::class, 'cuti']);
    Route::get('packaged', [PackagedController::class, 'all']);
    Route::get('trainer', [TrainerController::class, 'all']);
    Route::get('voucher', [VoucherController::class, 'all']);
    Route::get('jadwalkelas', [JadwalkelasController::class, 'all']);
    Route::get('article', [ArticleController::class, 'all']);
    Route::get('banner', [BannerController::class, 'all']);
    Route::get('kelas', [KelasController::class, 'all']);
    Route::get('notification', [NotificationController::class, 'all']);
    Route::get('location', [LocationController::class, 'all']);
    Route::get('transaction', [TransactionController::class, 'all']);
});

Route::post('login', [UserController::class, 'login']);
Route::get('cuti', [CutiController::class, 'all']);
Route::get('setting', [SettingController::class, 'all']);
Route::get('tnc', [TncController::class, 'all']);