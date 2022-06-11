<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;



Route::get('/',[TestController::class, 'index']);


// Route::get('/{msg?}', [App\Http\Controllers\TestController::class, 'index']);


?>