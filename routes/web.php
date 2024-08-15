<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TncController;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\MetodeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\DatauserController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PackagedController;
use App\Http\Controllers\PresenceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaildebitController;
use App\Http\Controllers\HargasesiController;
use App\Http\Controllers\DatatrainerController;
use App\Http\Controllers\JadwalkelasController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\UserpresenceController;
use App\Http\Controllers\TrainerpresenceController;
use App\Http\Controllers\Session_transactionController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function (){
    return redirect()->route('dashboard');
});

// Dashboard
Route::prefix('dashboard')
    ->middleware(['auth:sanctum', 'admin'])
    ->group(function() {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('cutis', CutiController::class);
        Route::resource('packageds', PackagedController::class);
        Route::resource('transactions', TransactionController::class);
        Route::resource('faildebits', FaildebitController::class);
        Route::delete('/faildebits', [FaildebitController::class, 'deleteAllFaildebits'])->name('faildebits.delete');
        Route::resource('session_transactions', Session_transactionController::class);
        Route::resource('vouchers', VoucherController::class);
        Route::resource('saless', SalesController::class);
        Route::resource('metodes', MetodeController::class);

        Route::resource('presences', PresenceController::class);
        Route::resource('datatrainers', DatatrainerController::class);
        Route::resource('hargasesis', HargasesiController::class);
        Route::resource('trainerpresences', TrainerpresenceController::class);
        Route::resource('userpresences', UserpresenceController::class);
        Route::resource('participants', ParticipantController::class);
        // Route::get('/participants/faildebit', [ParticipantController::class, 'faildebit'])->name('participants.faildebit');
        Route::delete('/presence/{id_presence}', [ParticipantController::class, 'hapus'])->name('participants.hapus');
        // Route::update('/presence/{id_presence}', [ParticipantController::class, 'update2'])->name('participants.update2');

        Route::resource('articles', ArticleController::class);
        Route::resource('banners', BannerController::class);
        Route::resource('kelass', KelasController::class);
        Route::resource('jadwalkelass', JadwalkelasController::class);
        Route::get('/location/{id}', [JadwalkelasController::class, 'jadwalLocation'])->name('location.detail');
        Route::resource('locations', LocationController::class);
        Route::resource('tncs', TncController::class);
        Route::resource('notifications', NotificationController::class);
        Route::resource('settings', SettingController::class);
        Route::resource('accounts', UserController::class);
    });

Route::get('/qrcode/{id_location}',[LocationController::class,'location'])->name('locations.qrcode');



// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
