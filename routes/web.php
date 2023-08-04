<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Auth\LoginController;



route::view('/', 'welcome');
route::view('login', 'login');
route::view('dashboard', 'dashboard');

route::post('login', [LoginController::class, 'login']);
route::post('logout', [LoginController::class, 'logout']);