<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ThemeController;
use App\Http\Middleware\authCheck;
use Illuminate\Support\Facades\Route;


//---------------------------------------------------------------------------------------------------------------------//


Route::middleware([authCheck::class])->group(function () 
{

    Route::get('/', [PageController::class, 'details']);
    Route::get('/form', [PageController::class, 'details'])->name('form');

    Route::get('/data', [PageController::class, 'show'])->name('data');
    Route::get('/submit', [PageController::class, 'submitted']);

    Route::get('/data', [PageController::class, 'show'])->name('data');
    Route::get('/submit', [PageController::class, 'submitted']);

    Route::post('/submit', [PageController::class, 'store']);

    Route::get('/edit', [PageController::class, 'edit'])->name("edit");

    Route::post('/update', [PageController::class, 'update'])->name("update");

    Route::get('/delete', [PageController::class, 'delete'])->name("delete");
});
 
    Route::get('/authentication', [PageController::class, 'authentication'])->name('auth');
    Route::post('/authenticationsave', [PageController::class, 'checkLog'])->name('checkLog');

    Route::get('/register', [PageController::class, 'reg'])->name('regis');
    Route::post('/register', [PageController::class, 'checkReg'])->name('checkReg');

    Route::get('/crash', [PageController::class, 'wrong'])->name('crash');




