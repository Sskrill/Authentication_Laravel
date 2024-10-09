<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// main -Главная страница
Route::get('/main',[MainController::class,'index'])->name('main.index');

// Авторизация
Route::get('/signUp',[AuthController::class,'signUp'])->name('auth.signUp');
Route::get('/signIn',[AuthController::class,'signIn'])->name('auth.signIn');

Route::post('/login',[AuthController::class,'login'])->name('auth.login');
Route::post('/register',[AuthController::class,'register'])->name('auth.register');



    Route::prefix('api')->middleware(['throttle:api','auth:sanctum'])->group(function(){
Route::get('/logout',[AuthController::class,'logout']);

        // Employee -Работа с сущностью Сотрудник
        Route::get('/employee',[EmployeeController::class,'index'])->name('employee.index');
        Route::get('/employee/create',[EmployeeController::class,'create'])->name('employee.create');
        Route::get('/employee/{id}',[EmployeeController::class,'show'])->name('employee.show');
        Route::post('/employee/store',[EmployeeController::class,'store'])->name('employee.store');
        Route::get('/employee/{id}/edit',[EmployeeController::class,'edit'])->name('employee.edit');
        Route::patch('/employee/{id}',[EmployeeController::class,'update'])->name('employee.update');
        Route::delete('/employee/{id}',[EmployeeController::class,'delete'])->name('employee.destroy');
    });

