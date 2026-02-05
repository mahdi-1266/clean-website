<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\AdminController;
// use App\Http\Controllers\Projects;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/dashboard', function () {
   return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth', 'verified'])->group(function () {
  Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
});

Route::middleware('auth')->group(function () {
  Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
  Route::post('/profile/store', [AdminController::class, 'StoreProfile'])->name('profile.store');
  Route::post('/admin/password/update', [AdminController::class, 'AdminUpdatePassword'])->name('admin.password.update');
});

/* ----- Projects Route ----- */
Route::controller(FrontendController::class)->group(function () {
  Route::get('/about', 'About')->name('about');
  Route::get('/all/projects', 'projects')->name('all.projects');
});

Route::controller(BackendController::class)->group(function(){
  Route::get('/hero/section', 'HeroSection')->name('hero.section');
  Route::get('/create/hero/section', 'CreateHeroSection')->name('add.hero.section');
  Route::post('/store/hero/section', 'StoreHeroSection')->name('store.hero.section');
  Route::get('/edit/hero/section/{id}', 'EditHeroSection')->name('edit.hero.section');
  Route::post('/update/hero/section', 'UpdateHeroSection')->name('update.hero.section');
  Route::get('/delete/hero/section/{id}', 'DeleteHeroSection')->name('delete.hero.section');
});

// About Section
Route::controller(BackendController::class)->group(function () {
  Route::get('/all/about', 'AllAbout')->name('all.about');
  Route::get('/add/about', 'AddAbout')->name('add.about');
  Route::post('/store/about', 'StoreAbout')->name('store.about');
  Route::get('/edit/about/{id}', 'EditAbout')->name('edit.about');
  Route::post('/update/about', 'UpdateAbout')->name('update.about');
});

// Story Section
Route::controller(BackendController::class)->group(function () {
  Route::get('/all/story', 'AllStory')->name('all.story');
  Route::get('/add/story', 'AddStory')->name('add.story');
  Route::post('/store/story', 'StoreStory')->name('store.story');
  Route::get('/edit/story/{id}', 'EditStory')->name('edit.story');
  Route::post('/update/story', 'UpdateStory')->name('update.story');
});

Route::controller(BackendController::class)->group(function (){
  Route::get('/all/portfolio', 'AllPortfolio')->name('all.portfolio');
  Route::get('/add/portfolio', 'AddPortfolio')->name('add.portfolio');
  Route::post('/store/portfolio', 'StorePortfolio')->name('store.portfolio');
  Route::get('/edit/portfolio/{id}', 'EditPortfolio')->name('edit.portfolio');
  Route::post('/update/portfolio', 'UpdatePortfolio')->name('update.portfolio');
  Route::get('/delete/portfolio/{id}', 'DeletePortfolio')->name('delete.portfolio');
});

Route::controller(BackendController::class)->group(function(){
  Route::get('/projects', 'projects')->name('admin.projects');
  Route::get('/create/project', 'CreateProjects')->name('add.project');
  Route::post('/store/project', 'StoreProject')->name('store.project');
  Route::get('/edit/project/{id}', 'EditProject')->name('edit.project');
  Route::post('/update/project', 'UpdateProject')->name('update.project');
  Route::get('/delete/project/{id}', 'DeleteProject')->name('delete.project');
});

Route::controller(BackendController::class)->group(function(){
  Route::get('/our-team', 'OurTeam')->name('our-team');
  Route::get('/create/our-team', 'CreateOurTeam')->name('add.our-team');
  Route::post('/store/our-team', 'StoreOurTeam')->name('store.our-team');
  Route::get('/edit/our-team/{id}', 'EditOurTeam')->name('edit.our-team');
  Route::post('/update/our-team/', 'UpdateOurTeam')->name('update.our-team');
  Route::get('/delete/our-team/{id}', 'DeleteOurTeam')->name('delete.our-team');
});