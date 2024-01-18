<?php

use App\Http\Controllers\CvController;
use App\Http\Controllers\PostulanteController;
use App\Http\Controllers\ReporteController;
use Illuminate\Support\Facades\Route;



Route::get('/',[PostulanteController::class,'index'] );
Route::get('reportes',[ReporteController::class,'reportes'])->name('reportes');

//Route::get('/',[CvController::class,'index'] );
//Route::get('reportes/cv',[ReporteController::class,'reportescv'])->name('reportes_cv');