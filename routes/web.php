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




//Route::get('contact', 'ContactsController@create')->name('contact.create');



Route::post('contact', 'ContactsController@store')->name('contact.store');



Route::get('/', function () {
    return view('welcome');
});

Route::get('photo', function () {
   return view('photo');
 });

 Route::get('tia', function () {
     return "Tia is GREAT !";
 });

 Auth::routes();

 Route::get('/home', 'HomeController@index')->name('home');


 Route::get('/test-contact', function () {
    return new App\Mail\Contact([
      'nom' => 'Durand',
      'email' => 'clucie97495@gmail.com',
      'message' => 'Je voulais vous dire que votre site est magnifique !'
      ]);
});