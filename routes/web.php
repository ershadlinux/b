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
//
//Route::get('/', function () {
//    return view('welcome');
//});


Auth::routes();

Route::get('/', function () {
    return view('pages/index');
});
Route::get('/home', function () {
    return view('pages/home');
//    return view('banners/create');
});

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/contact', function () {
    return view('pages/contact');
});

Route::get('/project', function () {
    return view('pages/project');
})->middleware('auth');




//Route::get('project2','BannersController@project2');

////
//Route::get('b/create ', function () {
////    return view('pages/create');
//    return view('banners/create');
//});

//
Route::resource('banners','BannersController');

//Route::get('/home', 'HomeController@index')->name('home');



Route::get('{zip}/{street}','BannersController@show');
//Route::post('{zip}/{street}/photos','BannersController@addPhotos')->name('addPhotos');

Route::post('{zip}/{street}/photos',[
    'as'=>'store_photo_path',
    'uses'=>'BannersController@addPhotos'

]);










//Route::get( '/d', function () {
//    return redirect('b')->with('status', 'Profile updated!');
//});
//
//Route::get( '/b', function () {
////    return view('ss');
////    return response()->file("banners/photos/1524641156-Gulfstream-G200-21.jpg");
////    return response()->download("banners/photos/1524641156-Gulfstream-G200-21.jpg");
//
////    return response()->json([
////        'name' => 'Abigail',
////        'state' => 'CA'
////    ]);
//
//
////    return response("hi")
////        ->header('Content-Type', 'text/plain')
////        ->header('X-Header-One', 'Header Value1')
////        ->header('X-Header-Two', 'Header Value2');
//
//
//});
//


