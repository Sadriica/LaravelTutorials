<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');

Route::get('/about', function () {

    $data1 = 'About us - Online Store';

    $data2 = 'About us';

    $description = 'This is an about page ...';

    $author = 'Developed by: Your Name';

    return view('home.about')->with('title', $data1)
        ->with('subtitle', $data2)
        ->with('description', $description)
        ->with('author', $author);

})->name('home.about');

Route::get('/about', function () {

    $data1 = 'About us - Online Store';

    $data2 = 'About us';

    $description = 'This is an about page ...';

    $author = 'Developed by: Your Name';

    return view('home.about')->with('title', $data1)
        ->with('subtitle', $data2)
        ->with('description', $description)
        ->with('author', $author);

})->name('home.about');

Route::get('/contact', function () {

    $data1 = 'Contact - Online Store';

    $data2 = 'Contact';

    $email = 'applicationemail@yourcompany.com';

    $address = '50932 Miami';

    $phone = '+1 3007881333';

    return view('home.contact')->with('title', $data1)
        ->with('subtitle', $data2)
        ->with('email', $email)
        ->with('address', $address)
        ->with('phone', $phone);

})->name('home.contact');

Route::get('/products', 'App\Http\Controllers\ProductController@index')->name('product.index');
Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name('product.create');
Route::post('/products/save', 'App\Http\Controllers\ProductController@save')->name('product.save');
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name('product.show');
Route::get('/image', 'App\Http\Controllers\ImageController@index')->name('image.index');
Route::post('/image/save', 'App\Http\Controllers\ImageController@save')->name('image.save');
Route::get('/image-not-di', 'App\Http\Controllers\ImageNotDIController@index')->name('imagenotdi.index');
Route::post('/image-not-di/save', 'App\Http\Controllers\ImageNotDIController@save')->name('imagenotdi.save');
