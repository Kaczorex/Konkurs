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
    return view('welcome');
});

Route::group([
    'middleware' => 'roles',
    'roles' => ['Administrator','Administrator Transportu']
        ], function() {

    
       Route::get('Transport', [
        'uses' => 'TransportController@index',
        'as' => 'transport.index'
    ]);
       Route::get('Transport/create', [
        'uses' => 'TransportController@create',
        'as' => 'transport.create'
    ]);
       Route::post('Transport/store', [
        'uses' => 'TransportController@store',
        'as' => 'transport.store'
    ]);

    

});

Auth::routes();

Route::get('/home', 'HomeController@index');
