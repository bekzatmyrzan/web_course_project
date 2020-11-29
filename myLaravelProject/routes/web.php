<?php

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

Route::get('/', [\App\Http\Controllers\MainController::class,'index'])->name('index');

Route::get('/test', function () {
    return view('testHref');
});

Route::get('/about', [\App\Http\Controllers\MainController::class,'about']);

Route::get('/profile', [\App\Http\Controllers\MainController::class,'profile'])->name('profile');

Route::get('/contact', [\App\Http\Controllers\MainController::class,'contact']);

Route::get('/matches', [\App\Http\Controllers\MainController::class,'matches']);

Route::get('/news', [\App\Http\Controllers\MainController::class,'news']);

Route::get('/registration', [\App\Http\Controllers\MainController::class,'registration']);

Route::get('/teams', [\App\Http\Controllers\MainController::class,'teams']);

Route::get('/login', [\App\Http\Controllers\MainController::class,'login'])->name('login');

Route::get('/admin', [\App\Http\Controllers\MainController::class,'admin'])->name('admin');

Route::get('/admin/stadiums', [\App\Http\Controllers\MainController::class,'admin_stadiums'])->name('admin_stadiums');

Route::get('/admin/cities', [\App\Http\Controllers\MainController::class,'admin_cities'])->name('admin_cities');

Route::get('/admin/clubs', [\App\Http\Controllers\MainController::class,'admin_clubs'])->name('admin_clubs');

Route::get('/admin/positions', [\App\Http\Controllers\MainController::class,'admin_positions'])->name('admin_positions');

Route::get('/admin/players', [\App\Http\Controllers\MainController::class,'admin_players'])->name('admin_players');

Route::get('/admin/rounds', [\App\Http\Controllers\MainController::class,'admin_rounds'])->name('admin_rounds');

Route::get('/admin/matches', [\App\Http\Controllers\MainController::class,'admin_matches'])->name('admin_matches');

Route::get('/admin/matches_players', [\App\Http\Controllers\MainController::class,'admin_matches_players'])->name('admin_matches_players');

Route::get('/admin/roles', [\App\Http\Controllers\MainController::class,'admin_roles'])->name('admin_roles');

Route::get('/admin/users', [\App\Http\Controllers\MainController::class,'admin_users'])->name('admin_users');

Route::get('/admin/news', [\App\Http\Controllers\MainController::class,'admin_news'])->name('admin_news');

Route::get('/admin/admin_city_details/{id}', [\App\Http\Controllers\MainController::class,'admin_city_details'])->name('admin_city_details');

Route::post('/admin/admin_delete_city/{id}', [\App\Http\Controllers\MainController::class,'admin_delete_city'])->name('admin_delete_city');

Route::post('/admin/edit_city', [\App\Http\Controllers\MainController::class,'edit_city']);

Route::post('/admin/add_city', [\App\Http\Controllers\MainController::class,'add_city']);

Route::get('/admin/admin_stadium_details/{id}', [\App\Http\Controllers\MainController::class,'admin_stadium_details'])->name('admin_stadium_details');

Route::post('/admin/admin_delete_stadium/{id}', [\App\Http\Controllers\MainController::class,'admin_delete_stadium'])->name('admin_delete_stadium');

Route::post('/admin/edit_stadium', [\App\Http\Controllers\MainController::class,'edit_stadium']);

Route::post('/admin/add_stadium', [\App\Http\Controllers\MainController::class,'add_stadium']);

Route::get('/admin/admin_club_details/{id}', [\App\Http\Controllers\MainController::class,'admin_club_details'])->name('admin_club_details');

Route::post('/admin/admin_delete_club/{id}', [\App\Http\Controllers\MainController::class,'admin_delete_club'])->name('admin_delete_club');

Route::post('/admin/edit_club', [\App\Http\Controllers\MainController::class,'edit_club']);

Route::post('/admin/add_club', [\App\Http\Controllers\MainController::class,'add_club']);

Route::post('/admin/add_position', [\App\Http\Controllers\MainController::class,'add_position']);

Route::get('/admin/admin_player_details/{id}', [\App\Http\Controllers\MainController::class,'admin_player_details'])->name('admin_player_details');

Route::post('/admin/admin_delete_player/{id}', [\App\Http\Controllers\MainController::class,'admin_delete_player'])->name('admin_delete_player');

Route::post('/admin/edit_player', [\App\Http\Controllers\MainController::class,'edit_player']);

Route::post('/admin/add_player', [\App\Http\Controllers\MainController::class,'add_player']);

Route::post('/admin/add_round', [\App\Http\Controllers\MainController::class,'add_round']);

Route::get('/admin/admin_match_details/{id}', [\App\Http\Controllers\MainController::class,'admin_match_details'])->name('admin_match_details');

Route::post('/admin/admin_delete_match/{id}', [\App\Http\Controllers\MainController::class,'admin_delete_match'])->name('admin_delete_match');

Route::post('/admin/edit_match', [\App\Http\Controllers\MainController::class,'edit_match']);

Route::post('/admin/add_match', [\App\Http\Controllers\MainController::class,'add_match']);

Route::post('/admin/add_match_player', [\App\Http\Controllers\MainController::class,'add_match_player']);

Route::post('/admin/add_role', [\App\Http\Controllers\MainController::class,'add_role']);

Route::get('/admin/admin_user_details/{id}', [\App\Http\Controllers\MainController::class,'admin_user_details'])->name('admin_user_details');

Route::post('/admin/admin_delete_user/{id}', [\App\Http\Controllers\MainController::class,'admin_delete_user'])->name('admin_delete_user');

Route::post('/admin/edit_user', [\App\Http\Controllers\MainController::class,'edit_user']);

Route::post('/admin/add_user', [\App\Http\Controllers\MainController::class,'add_user']);

Route::post('/admin/add_news', [\App\Http\Controllers\MainController::class,'add_news']);

Route::post('/profile/add_news', [\App\Http\Controllers\MainController::class,'profile_add_news']);

Route::post('/login_to_site', [\App\Http\Controllers\MainController::class,'login_to_site']);

Route::post('/logout', [\App\Http\Controllers\MainController::class,'logout']);
