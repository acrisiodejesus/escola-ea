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
    return view('welcome');
});


Route::get('/', function () {
    return view("/layouts/index");
    
});
Route::get('/', function(){
    return view('/pages/main');
});
Route::get('/pre-inscricao',function(){
    return view("/pages/pre-inscricao");

});

Route::get("/news",function(){
    return view("pages/news");
});
Route::get("/palavras-do-fundador",function(){
    return view("pages/palavras_do_fundador");
});
Route::get('/quem-somos', function () {
    return view("pages.quem-somos");
    
});
Route::get("nossos-parceiros",function(){
    return view("pages.nossos-parceiros");
});

Route::get("/pre-escolar",function(){
    return view("pages.aacademico.pre-escolar");
});
Route::get("/1o-grau-ep1",function(){
    return view("pages.aacademico.1o-grau-ep1");
});

Route::get("/2ograu-ep2",function(){
    return view("pages.aacademico.2ograu-ep2");
});

Route::get("/ensino-secundario",function(){
    return view("pages.aacademico.ensino-secundario");
});
Route::get("/actividades-extra-corriculares",function(){
    return view("pages.aacademico.actividades-extra-corriculares");
});
Route::get("/equipe",function(){
    return view("pages.equipe");
});



