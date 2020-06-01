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

Route::post('postulantes/store', 'PostulanteController@store')->name('postulantes.store');
Route::get('postulantes/create', 'PostulanteController@create')->name('postulantes.create');
Route::get('convoc', 'ConvocatoriaController@view')->name('convoc.view');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
	//Roles
	Route::post('roles/store', 'RoleController@store')->name('roles.store')
		->middleware('permission:roles.create');

	Route::get('roles', 'RoleController@index')->name('roles.index')
		->middleware('permission:roles.index');

	Route::get('roles/create', 'RoleController@create')->name('roles.create')
		->middleware('permission:roles.create');

	Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
		->middleware('permission:roles.edit');

	Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
		->middleware('permission:roles.show');

	Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
		->middleware('permission:roles.destroy');

	Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
        ->middleware('permission:roles.edit');

	//Users
    Route::post('users/store', 'UserController@store')->name('users.store')
		->middleware('permission:users.create');

	Route::get('users', 'UserController@index')->name('users.index')
		->middleware('permission:users.index');

	Route::get('users/create', 'UserController@create')->name('users.create')
		->middleware('permission:users.create');

	Route::put('users/{user}', 'UserController@update')->name('users.update')
		->middleware('permission:users.edit');

	Route::get('users/{user}', 'UserController@show')->name('users.show')
		->middleware('permission:users.show');

	Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
		->middleware('permission:users.destroy');

	Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
		->middleware('permission:users.edit');

	//Convocatorias
	Route::post('convocatorias/store', 'ConvocatoriaController@store')->name('convocatorias.store')
	->middleware('permission:convocatorias.create');

	Route::get('convocatorias', 'ConvocatoriaController@index')->name('convocatorias.index')
		->middleware('permission:convocatorias.index');

	Route::get('convocatorias/create', 'ConvocatoriaController@create')->name('convocatorias.create')
		->middleware('permission:convocatorias.create');

	Route::put('convocatorias/{convocatoria}', 'ConvocatoriaController@update')->name('convocatorias.update')
		->middleware('permission:convocatorias.edit');

	Route::get('convocatorias/{convocatoria}', 'ConvocatoriaController@show')->name('convocatorias.show')
		->middleware('permission:convocatorias.show');

	Route::delete('convocatorias/{convocatoria}', 'ConvocatoriaController@destroy')->name('convocatorias.destroy')
		->middleware('permission:convocatorias.destroy');

	Route::get('convocatorias/{convocatoria}/edit', 'ConvocatoriaController@edit')->name('convocatorias.edit')
		->middleware('permission:convocatorias.edit');

	//Postulante
	Route::get('postulantes/notas', 'PostulanteController@index')->name('postulantes.index')
		->middleware('permission:postulantes.index');

	//Postulation
	Route::post('postulations/store', 'PostulationController@store')->name('postulations.store')
	->middleware('permission:postulations.create');

	Route::get('postulations', 'PostulationController@index')->name('postulations.index')
		->middleware('permission:postulations.index');

	Route::get('postulations/create', 'PostulationController@create')->name('postulations.create')
		->middleware('permission:postulations.create');

	Route::put('postulations/{postulation}', 'PostulationController@update')->name('postulations.update')
		->middleware('permission:postulations.edit');

	Route::get('postulations/{postulation}', 'PostulationController@show')->name('postulations.show')
		->middleware('permission:postulations.show');

	Route::delete('postulations/{postulation}', 'PostulationController@destroy')->name('postulations.destroy')
		->middleware('permission:postulations.destroy');

	Route::get('postulations/{postulation}/edit', 'PostulationController@edit')->name('postulations.edit')
		->middleware('permission:postulations.edit');

	Route::get('postulations/apply/{id}', 'PostulationController@apply')->name('postulations.apply')
	->middleware('permission:postulations.apply');
});