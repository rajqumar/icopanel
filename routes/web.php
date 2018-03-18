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
    return view('login');
});

Route::get('/dashboard', function () {
    return view('panel');
});

// Route::get('/dashboard', function () {
//     return view('pages.dashboard');
// });

Route::get('/login', function () {
    return view('login');
});

Route::get('/test', 'Controller@AddAuthorizationToRequest');

Route::get('/header', 'ViewController@header');
Route::get('/background', 'ViewController@background');
Route::get('/features', 'ViewController@features');
Route::get('/about', 'ViewController@about');
Route::get('/clients', 'ViewController@clients');
Route::get('/goals', 'ViewController@goals');
Route::get('/tokensale', 'ViewController@tokensale');
Route::get('/tokenstructure', 'ViewController@tokenstructure');
Route::get('/footer', 'ViewController@footer');
Route::get('/subscribers', 'ViewController@subscribers');
Route::get('/roadmap', 'ViewController@roadmap');
Route::get('/team', 'ViewController@team');
Route::get('/customize', 'ViewController@customize');

Route::get('/changePassword','HomeController@showChangePasswordForm');
Route::post('/update_password','HomeController@changePassword');

Route::get('/solutions', 'ViewController@solutions');

Route::post('/aboutPost', 'Controller@aboutPost');
Route::post('/featuesPost', 'Controller@featuesPost');
Route::post('/headerPost', 'Controller@headerPost');
Route::post('/backgroundPost', 'Controller@backgroundPost');
Route::post('/clientsPost', 'Controller@clientsPost');
Route::post('/solutionsPost', 'Controller@solutionsPost');
Route::post('/teamPost', 'Controller@teamPost');
Route::post('/goalsPost', 'Controller@goalsPost');
Route::post('/tokensalePost', 'Controller@tokensalePost');
Route::post('/structurePost', 'Controller@structurePost');
Route::post('/footerPost', 'Controller@footerPost');
Route::post('/roadmapPost', 'Controller@roadmapPost');
Route::post('/icoUsersList', 'Controller@icoUsersList');
Route::post('/subscribersList', 'Controller@subscribersList');
Route::post('/customizePost', 'Controller@customizePost');
Route::post('/footerPost', 'Controller@footerPost');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');
Route::post('/post_login', 'Auth\LoginController@postLogin');
Route::get('/logout', 'Auth\LoginController@logout');
