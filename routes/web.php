<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GetDataUserController;
use App\Http\Controllers\AccountDataUpdateController;
use App\Http\Controllers\AvatarsShowController;
use App\Http\Controllers\ExitController;

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
    return view('main_lack_of_events'); // Исправил пробелы в названии представления
})->name('/');

Route::patch('/account/{id}', [AccountDataUpdateController::class, 'edit'])->name('user.update');

Route::get('/account', [GetDataUserController::class, 'showFormData'])->name('account'); // Исправил дублирование маршрута

Route::get('/account/exit',[ExitController::class,'logout'])->name('logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

