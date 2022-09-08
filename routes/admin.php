<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;

Route::controller(DashboardController::class)->group(function(){
	Route::get('/', 'dashboard')->name('dashboard');
});
