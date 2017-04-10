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

/*
|----------------------------------------------------------------------------------------------------------------------+
| Login Routes - Sentinel Implementation                                                                               |
+--------+----------+------------------------------+----------------------+--------------------------------------------+
*/
Route::get('login', ['as' => 'login.page', 'uses' => 'Auth\LoginController@loginPage']);
Route::post('login', ['as' => 'login', 'uses' => 'Auth\LoginController@loginAttempt']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

/*
|----------------------------------------------------------------------------------------------------------------------+
| Home and Dashboard Routes                                                                                            |
|----------------------------------------------------------------------------------------------------------------------+
*/
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

/*
|----------------------------------------------------------------------------------------------------------------------+
| Roles Routes - Sentinel Implementation                                                                               |
+--------+----------+------------------------------+----------------------+--------------------------------------------+
*/
Route::resource('roles', 'RolesController');

/*
|----------------------------------------------------------------------------------------------------------------------+
| Permissions Routes - Sentinel Implementation                                                                         |
+--------+----------+------------------------------+--------------------------+----------------------------------------+
*/

Route::resource('permissions', 'PermissionsController');

/*
|----------------------------------------------------------------------------------------------------------------------+
| User Routes - Sentinel Implementation                                                                                |
|----------------------------------------------------------------------------------------------------------------------+
*/

Route::resource('users', 'UsersController');
Route::get('users/{id}/profile', ['as' => 'users.show', 'uses' => 'UsersController@show']);
Route::get('activate/{id}/{code}', ['as'   => 'users.activate', 'uses' => 'UsersController@activate']);
Route::get('reset/{id}/{code}', ['as' => 'reset.password.page', 'uses' => 'Auth\LoginController@resetPasswordPage']);
Route::post('reset', ['as' => 'reset.password', 'uses' => 'Auth\LoginController@resetPassword']);

/*
|----------------------------------------------------------------------------------------------------------------------+
| Clients Routes                                                                                                       |
|----------------------------------------------------------------------------------------------------------------------+
*/
Route::resource('clients', 'ClientsController');
Route::get('clients/search/{search}', ['as' => 'clients.search', 'uses' => 'ClientsController@search']);

Route::any('test', function(){
   return view('products.index');
});

/*
|----------------------------------------------------------------------------------------------------------------------+
| Products Routes                                                                                                      |
|----------------------------------------------------------------------------------------------------------------------+
*/
Route::resource('products', 'ProductsController');