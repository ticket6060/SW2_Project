<?php
use App\Events;
use Illuminate\Support\Facades\Input;

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
    return view('index');
});


Route::get('about', function () {
    return view('about');
});
//Route::get('product-detail','DataController@details');
Route::get('Concerts','DataController@concert');
Route::get('Movies','DataController@movies');
Route::get('Theater','DataController@Theater');
Route::get('/','DataController@index');
Route::get('contact', 'PagesController@getContact');
Route::post('contact', 'PagesController@postContact');
Route::post('/postsearch', 'SearchFunctionalityController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// adminpanel
Route::resource('admin', 'AdminPanelController');

