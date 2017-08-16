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

Route::get('sendmail','SendMailController@sendMail');
Auth::routes();



Route::group(['middleware'=>['auth']], function(){
  Route::get('/home', 'HomeController@index')->name('home');

  Route::resource('users','UserController');

  // Route::get('users',['as'=>'users.index', 'uses'=>'UserController@index']);

  // Route::get('users/create',['as'=>'users.create', 'uses'=>'UserController@create']);
  // Route::post('users/create',['as'=>'users.store', 'uses'=>'UserController@store']);
  //
  // Route::get('users/{id}',['as'=>'users.show', 'uses'=>'UserController@show']);
  //
  // Route::get('users/{id}/edit',['as'=>'users.edit', 'uses'=>'UserController@edit']);
  // Route::patch('users/{id}',['as'=>'users.update', 'uses'=>'UserController@update']);
  //
  // Route::delete('user/{id}/delete',['as'=>'users.destroy', 'uses'=>'UserController@destroy']);

  Route::get('roles',['as'=>'roles.index','uses'=>'RoleController@index','middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);

  Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:role-create']]);

  Route::post('roles/create',['as'=>'roles.store','uses'=>'RoleController@store','middleware' => ['permission:role-create']]);

  Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show']);

  Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:role-edit']]);

  Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:role-edit']]);

  Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy','middleware' => ['permission:role-delete']]);



   Route::get('item',['as'=>'item.index', 'uses'=>'ItemController@index']);

  // Route::get('item',['as'=>'item.index','uses'=>'ItemController@index',
              // 'middleware' => ['permission:item-list|item-create|item-edit|item-delete']]);

  Route::get('item/create',['as'=>'item.create','uses'=>'ItemController@create','middleware' => ['permission:item-create']]);

  Route::post('item/create',['as'=>'item.store','uses'=>'ItemController@store','middleware' => ['permission:item-create']]);

  Route::get('item/{id}',['as'=>'item.show','uses'=>'ItemController@show']);

  Route::get('item/{id}/edit',['as'=>'item.edit','uses'=>'ItemController@edit','middleware' => ['permission:item-edit']]);

  Route::patch('item/{id}',['as'=>'item.update','uses'=>'ItemController@update','middleware' => ['permission:item-edit']]);

  Route::delete('item/{id}',['as'=>'item.destroy','uses'=>'ItemController@destroy','middleware' => ['permission:item-delete']]);

});
