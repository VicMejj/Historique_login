<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HistoriqueLoginController;


Route::resource('historique_logins', HistoriqueLoginController::class);


