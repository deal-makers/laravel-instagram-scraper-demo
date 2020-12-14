<?php
  use App\Http\Controllers\LanguageController;

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


// Route url
Route::middleware(['auth', 'isActivated'])->group(function () {

  Route::resource('roles','RoleController');
  Route::resource('users','UserController');

  Route::get('/', 'ScrapImageController@index');

  // Route Dashboards
  Route::get('/scrap-image', 'ScrapImageController@index');
  Route::post('/scrap-image', 'ScrapImageController@getImages');

  // Account
  Route::get('/account', 'AccountController@index')->name('account.show');
  Route::post('/account-update/{user}', 'AccountController@update')->name('account.update');
  Route::post('/account-changepassword/{user}', 'AccountController@changePassword')->name('account.changepassword');
});


Auth::routes();

// locale Route
Route::get('lang/{locale}',[LanguageController::class,'swap']);
