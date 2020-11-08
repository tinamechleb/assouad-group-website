<?php

use Illuminate\Support\Facades\Route;

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
    return view('index', ['page_title' => "ASSOUAD Group"]);
});
Route::get('/about', function () {
    return view('about', ['page_title' => "About | ASSOUAD Group"]);
});
Route::get('/contact', function () {
    return view('contact', ['page_title' => "Contact | ASSOUAD Group"]);
});
Route::get('/services', function () {
    return view('services', ['page_title' => "Services | ASSOUAD Group"]);
});
Route::get('/projects', function () {
    return view('projects', ['page_title' => "Projects | ASSOUAD Group"]);
});
Route::get('/careers', function () {
    return view('careers', ['page_title' => "Careers | ASSOUAD Group"]);
});
