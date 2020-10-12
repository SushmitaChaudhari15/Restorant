<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookTable;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

// Route::get('/new', function () {
//     return view('dashboard');
// });


Route::get('/about', function () {
    return view('about');
});



Route::get('/shop-detail', function () {
    return view('shop-detail');
});


Route::get('/menu-1', function () {
    return view('menu-1');
});

Route::get('/contact', function () {
    return view('contact');
});



   
Route::get('/reservation1', function () {
    return view('reservation1');
});

Route::get('/reservation2', function () {
    return view('reservation2');
});


Route::get('/reservation3', function () {
    return view('reservation3');
});




Route::post('/contactsubmit',[bookTable::class,'contact']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::post('/booksubmit1',[bookTable::class,'book1']);
Route::post('/booksubmit2',[bookTable::class,'book2']);
Route::post('/booksubmit3',[bookTable::class,'book3']);
Route::group(['middleware'=>['user_auth']], function(){
    

   
    });
