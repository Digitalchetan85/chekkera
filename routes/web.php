<?php

use App\Http\Livewire\Admin\AdminDashboard;
use App\Http\Livewire\Home\HomeComponent;
use App\Http\Livewire\User\UserDashboard;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeComponent::class)->name('home');

//for users 
Route::middleware(['auth:sanctum','verified'])->group(function () {
    Route::get('/user/dashboard', UserDashboard::class)->name('user.dashboard');
});

//for Admin 
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboard::class)->name('admin.dashboard');
});