<?php

Route::get('/', function () {
    return view('phonebook');
});

Route::get('/{name}', function(){
  return redirect('/');
})->where('name', '[A-Za-z]+');

// Route::view('/', 'phonebook')->name('home');
// Route::redirect('/hello', '/', 301)->name('hello');
// Route::redirect('/{name}', '/')->where('name', '[A-Za-z]+');
