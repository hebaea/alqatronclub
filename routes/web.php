<?php

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('pages\index');
});

// Route::post('/', function (Request $request) {
//     Mail::send(new ContactMail($request));
//     return redirect('/');
// });

// Contact Us page route
// route::get('/contactus','ContactusController@index');
// route::post('/contactus','ContactusController@create');
// route::post('/contactus/send','ContactusController@send')->name('sendMessage');

// Route::get('/','ContactusController@index');
// Route::post('/','ContactusController@create');
Route::post('/','ContactusController@send')->name('sendMessage');
