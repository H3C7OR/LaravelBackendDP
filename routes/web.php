<?php

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
    return 'Home';
    // return view('welcome');
}); 

Route::get('/usuarios', function(){
    return 'Usuarios';
});

Route::get('/usuarios/{id}', function($id) {
    return "Mostrando detalle del usuario: {$id}";
})->where('id', '[0-9]+');

Route::get('/usuarios/nuevo', function() {
    return "Crear nuevo usuario";
});

Route::get('/saludo/{name}/{nickname?}', function($name, $nickname = null){
    if ($nickname != null){
        return "Bienvenido {$name}, tu apodo es {$nickname}";
    }        
    else{
        return "Bienvenido {$name}";
    }    
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

