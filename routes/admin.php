<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;


Route::controller(DashboardController::class)->group(function(){
	Route::get('/login', 'login')->name('admin.login');
	Route::post('/login/action', 'login_action')->name('admin.login.action');

	Route::group(['middleware' => 'auth.admin'], function(){
		Route::get('/', 'dashboard')->name('dashboard');
	});
	
});
