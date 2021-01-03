<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormValidtionController;
use App\Http\Controllers\ProductController;


Route::get('/form', [FormValidtionController::class,'createUserForm']);
Route::post('/form', [FormValidtionController::class, 'UserForm'])->name('actionForm');
Route::get("createProduct", [ProductController::class, 'createProduct']);
Route::post("createProduct", [ProductController::class, 'storeProduct'])->name('storeProduct');