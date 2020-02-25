<?php

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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
// clear cache
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});
