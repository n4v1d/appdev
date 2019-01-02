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

use Illuminate\Support\Facades\Auth;

Auth::routes();


Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', 'HomeController@index')->name('home');




// User DashBoard Panel
Route::group(['prefix' => 'dashboard',  'middleware' => 'auth'], function()
{
    Route::get('/','DashboardController@Index');
});




// Single Pages
Route::group(['prefix' => 'page'], function()
{
    Route::get('/contact', function ()
    {
        return view('Site.Page.Contact');
    });
});








// User DashBoard Panel
Route::group(['prefix' => 'article'], function()
{
    // List Of Article
    Route::get('/', 'ArticleController@Index')->name('blogpost');

    Route::get('/{slug}', 'ArticleController@Show');
});
