<?php

use App\Http\Controllers\Usercontroller;
use Illuminate\Support\Facades\Route;

/*
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
    return view('index');
});

Route::get("/", [Usercontroller::class,"signup"]);

Route::get("/$1",[Usercontroller::class,"$1"])->name('$1');
Route::get("/attendant-list",[Usercontroller::class,"attendant-list"])->name('attendant-list');
Route::get("/calendar",[Usercontroller::class,"calendar"])->name('calendar');
Route::get("/chat",[Usercontroller::class,"chat"])->name('chat');
Route::get("/create-event",[Usercontroller::class,"create-event"])->name('create-event');
Route::get("/dashboard",[Usercontroller::class,"dashboard"])->name('dashboard');
Route::get("/e",[Usercontroller::class,"e"])->name('e');
Route::get("/element",[Usercontroller::class,"element"])->name('element');
Route::get("/event-details",[Usercontroller::class,"event-details"])->name('event-details');
Route::get("/event-list",[Usercontroller::class,"event-list"])->name('event-list');
Route::get("/landing-page",[Usercontroller::class,"landing-page"])->name('landing-page');
Route::get("/profile",[Usercontroller::class,"profile"])->name('profile');
Route::get("/schedule-list",[Usercontroller::class,"schedule-list"])->name('schedule-list');
Route::get("/setting",[Usercontroller::class,"setting"])->name('setting');
Route::get("/signin",[Usercontroller::class,"signin"])->name('signin');
Route::get("/signup",[Usercontroller::class,"signup"])->name('signup');
Route::get("/speaker-list",[Usercontroller::class,"speaker-list"])->name('speaker-list');
Route::get("/t-params",[Usercontroller::class,"t-params"])->name('t-params');
Route::get("/venue",[Usercontroller::class,"venue"])->name('venue');
//Route::get("/index",[Usercontroller::class,"index"])->name('index');
Route::get("/index-main",[Usercontroller::class,"index-main"])->name('index-main');



