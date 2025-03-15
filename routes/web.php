<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\HomeworkController;
use App\Http\Controllers\RegesterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PersonController;

/*x
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/index',[BasicController::class,'index']
);

Route::get('/demo',[PracticeController::class,'demo']
);

Route::get('/homework',[HomeworkController::class,'fruits']
);

Route::get('/view',[RegesterController::class,'OpenRegester']
);

Route::post('/register',[RegesterController::class,'Regester']
);

Route::resource('/category', CategoryController::class);

Route::resource('/person', PersonController::class);

Route::get('/api_category',[ApiController::class,'getCategortyData']
);

Route::post('/add/categoryapi',[ApiController::class,'addCategoryApi']);