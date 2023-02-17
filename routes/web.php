<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MideaController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Dashboard\SkillController;
use App\Http\Controllers\Dashboard\ServicController;
use App\Http\Controllers\Dashboard\PersonalController;
use App\Http\Controllers\Dashboard\DashboardController;

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

Route::get('/',[HomeController::class,'index'])->name('home');


Route::post('/contact',[ContactController::class,'add'])->name('contact');



Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard.index');
//////////////////////////////////////////////////////////////////////////////////////////////////////

                                        //Personal Information

Route::get('/info/show',[DashboardController::class,'showInfo'])->name('dashboard.view_info_page');

Route::post('/info/edit',[DashboardController::class,'updateInfo'])->name('dashboard.update_info');
//////////////////////////////////////////////////////////////////////////////////////////////////////

                                        //Skills//

Route::get('/skills',[DashboardController::class,'showSkills'])->name('dashboard.view_skills_page');

Route::get('/skills/show',[SkillController::class,'show'])->name('dashboard.view_add_skills_page');

Route::post('/skills/add',[SkillController::class,'add'])->name('dashboard.add_skills');

Route::get('/skills/edit/{id}',[SkillController::class,'edit'])->name('dashboard.view_edit_skills_page');

Route::post('/skills/update/{id}',[SkillController::class,'update'])->name('dashboard.update_skills');

Route::post('/skills/delete/{id}',[SkillController::class,'delete'])->name('dashboard.delete_skills');

Route::get('/skills/delete/{id}',[SkillController::class,'delete'])->name('dashboard.delete_skills');
/////////////////////////////////////////////////////////////////////////////////////////////////////////

                                        //Services//

Route::get('/services',[DashboardController::class,'showServices'])->name('dashboard.view_services_page');

Route::get('/services/show',[ServicController::class,'show'])->name('dashboard.view_add_services_page');

Route::post('/services/add',[ServicController::class,'add'])->name('dashboard.add_services');

Route::get('/services/edit/{id}',[ServicController::class,'edit'])->name('dashboard.view_edit_services_page');

Route::post('/services/update/{id}',[ServicController::class,'update'])->name('dashboard.update_services');

Route::get('/services/delete/{id}',[ServicController::class,'delete'])->name('dashboard.delete_services');
////////////////////////////////////////////////////////////////////////////////////////////////////////////

                                        //Social Links/

 Route::get('/social_links',[DashboardController::class,'showSocials'])->name('dashboard.view_social_link_page');

 Route::get('/social_links/show',[SocialController::class,'show'])->name('dashboard.view_add_social_link_page');

 Route::post('/social_links/add',[SocialController::class,'add'])->name('dashboard.add_social_link');

 Route::get('/social_links/edit/{id}',[SocialController::class,'edit'])->name('dashboard.view_edit_social_link_page');

 Route::post('/social_links/update/{id}',[SocialController::class,'update'])->name('dashboard.update_social_link');

 Route::get('/social_links/delete/{id}',[SocialController::class,'delete'])->name('dashboard.delete_social_link');
 ////////////////////////////////////////////////////////////////////////////////////////////////////////////

require __DIR__.'/auth.php';
