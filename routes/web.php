<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormValidtionController;


Route::get('/form', [FormValidtionController::class,'createUserForm']);
Route::post('/form', [FormValidtionController::class, 'UserForm'])->name('actionForm');