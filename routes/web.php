<?php


Route::get('/',function(){
    return view ('index');
});

Route::get('/about',function(){
    return view ('about');
});

Route::get('teste',function(){
    return view ('teste');
});


Auth::routes();
Route::get('/home', 'HomeController@index');



Route::resource('pessoas', 'PessoaController');
