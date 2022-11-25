<?php

use App\Http\Livewire\About\AboutComponent;
use App\Http\Livewire\Admin\AddProject;
use App\Http\Livewire\Admin\AdminDashboard;
use App\Http\Livewire\Admin\EditProject;
use App\Http\Livewire\Admin\Projects;
use App\Http\Livewire\Buy\BuyComponent;
use App\Http\Livewire\Contact\ContactComponent;
use App\Http\Livewire\Details\DetailsComponent;
use App\Http\Livewire\Home\HomeComponent;
use App\Http\Livewire\Jd\JdComponent;
use App\Http\Livewire\Projects\Prestige;
use App\Http\Livewire\Projects\TotalEnvironment;
use App\Http\Livewire\Rent\RentComponent;
use App\Http\Livewire\Search\SearchComponent;
use App\Http\Livewire\Sell\SellComponent;
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
Route::get('/buy', BuyComponent::class)->name('buy');
Route::get('/about', AboutComponent::class)->name('about');
Route::get('/contact', ContactComponent::class)->name('contact');
Route::get('/rent', RentComponent::class)->name('rent');
Route::get('/sell', SellComponent::class)->name('sell');
Route::get('/jd', JdComponent::class)->name('jd');
Route::get('/prestige', Prestige::class)->name('prestige');
Route::get('/total-environment', TotalEnvironment::class)->name('total');
Route::get('/project/{project_slug}', DetailsComponent::class)->name('project.details');

Route::get('/search', SearchComponent::class)->name('project.search');

//for users 
Route::middleware(['auth:sanctum','verified'])->group(function () {
    Route::get('/user/dashboard', UserDashboard::class)->name('user.dashboard');
});

//for Admin 
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboard::class)->name('admin.dashboard');

    Route::get('/admin/projects', Projects::class)->name('admin.projects');
    Route::get('/admin/add-projects', AddProject::class)->name('admin.addprojects');
    Route::get('/admin/edit-projects/{project_id}', EditProject::class)->name('admin.editprojects');
});