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
Route::get('convoc/{convocatoria}', 'ConvocatoriaController@viewshow')->name('convoc.show');


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

	Route::get('postulations/{convocatoria}/certificados', 'PostulationController@postulationsPerConvocatoria')
		->name('postulations.perConvocatoria')
		->middleware('permission:postulations.index');

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

	//Materias
	Route::post('materias/store', 'MateriaController@store')->name('materias.store')
	->middleware('permission:materias.create');

	Route::get('materias', 'MateriaController@index')->name('materias.index')
		->middleware('permission:materias.index');

	Route::get('materias/create', 'MateriaController@create')->name('materias.create')
		->middleware('permission:materias.create');

	Route::put('materias/{materia}', 'MateriaController@update')->name('materias.update')
		->middleware('permission:materias.edit');

	Route::get('materias/{materia}', 'MateriaController@show')->name('materias.show')
		->middleware('permission:materias.show');

	Route::delete('materias/{materia}', 'MateriaController@destroy')->name('materias.destroy')
		->middleware('permission:materias.destroy');

	Route::get('materias/{materia}/edit', 'MateriaController@edit')->name('materias.edit')
		->middleware('permission:materias.edit');

	//Requerimientos
	Route::post('requerimientos/store', 'RequerimientoController@store')->name('requerimientos.store')
	->middleware('permission:requerimientos.create');

	Route::get('requerimientos', 'RequerimientoController@index')->name('requerimientos.index')
		->middleware('permission:requerimientos.index');

	Route::get('requerimientos/create', 'RequerimientoController@create')->name('requerimientos.create')
		->middleware('permission:requerimientos.create');

	Route::put('requerimientos/{requerimiento}', 'RequerimientoController@update')->name('requerimientos.update')
		->middleware('permission:requerimientos.edit');

	Route::get('requerimientos/{requerimiento}', 'RequerimientoController@show')->name('requerimientos.show')
		->middleware('permission:requerimientos.show');

	Route::delete('requerimientos/{requerimiento}', 'RequerimientoController@destroy')->name('requerimientos.destroy')
		->middleware('permission:requerimientos.destroy');

	Route::get('requerimientos/{requerimiento}/edit', 'RequerimientoController@edit')->name('requerimientos.edit')
		->middleware('permission:requerimientos.edit');

	//Requisitos
	Route::post('requisitos/store', 'RequisitoController@store')->name('requisitos.store')
	->middleware('permission:requisitos.create');

	Route::get('requisitos', 'RequisitoController@index')->name('requisitos.index')
		->middleware('permission:requisitos.index');

	Route::get('requisitos/create', 'RequisitoController@create')->name('requisitos.create')
		->middleware('permission:requisitos.create');

	Route::put('requisitos/{requisito}', 'RequisitoController@update')->name('requisitos.update')
		->middleware('permission:requisitos.edit');

	Route::get('requisitos/{requisito}', 'RequisitoController@show')->name('requisitos.show')
		->middleware('permission:requisitos.show');

	Route::delete('requisitos/{requisito}', 'RequisitoController@destroy')->name('requisitos.destroy')
		->middleware('permission:requisitos.destroy');

	Route::get('requisitos/{requisito}/edit', 'RequisitoController@edit')->name('requisitos.edit')
		->middleware('permission:requisitos.edit');

	//Documentos
	Route::post('documentos/store', 'DocumentoController@store')->name('documentos.store')
	->middleware('permission:documentos.create');

	Route::get('documentos', 'DocumentoController@index')->name('documentos.index')
		->middleware('permission:documentos.index');

	Route::get('documentos/create', 'DocumentoController@create')->name('documentos.create')
		->middleware('permission:documentos.create');

	Route::put('documentos/{documento}', 'DocumentoController@update')->name('documentos.update')
		->middleware('permission:documentos.edit');

	Route::get('documentos/{documento}', 'DocumentoController@show')->name('documentos.show')
		->middleware('permission:documentos.show');

	Route::delete('documentos/{documento}', 'DocumentoController@destroy')->name('documentos.destroy')
		->middleware('permission:documentos.destroy');

	Route::get('documentos/{documento}/edit', 'DocumentoController@edit')->name('documentos.edit')
		->middleware('permission:documentos.edit');

	//Fechas
	Route::post('fechas/store', 'FechaController@store')->name('fechas.store')
	->middleware('permission:fechas.create');

	Route::get('fechas', 'FechaController@index')->name('fechas.index')
		->middleware('permission:fechas.index');

	Route::get('fechas/create', 'FechaController@create')->name('fechas.create')
		->middleware('permission:fechas.create');

	Route::put('fechas/{fecha}', 'FechaController@update')->name('fechas.update')
		->middleware('permission:fechas.edit');

	Route::get('fechas/{fecha}', 'FechaController@show')->name('fechas.show')
		->middleware('permission:fechas.show');

	Route::delete('fechas/{fecha}', 'FechaController@destroy')->name('fechas.destroy')
		->middleware('permission:fechas.destroy');

	Route::get('fechas/{fecha}/edit', 'FechaController@edit')->name('fechas.edit')
		->middleware('permission:fechas.edit');

	//Meritos
	Route::post('meritos/store', 'MeritoController@store')->name('meritos.store')
	->middleware('permission:meritos.create');

	Route::get('meritos', 'MeritoController@index')->name('meritos.index')
		->middleware('permission:meritos.index');

	Route::get('meritos/create', 'MeritoController@create')->name('meritos.create')
		->middleware('permission:meritos.create');

	Route::put('meritos/{merito}', 'MeritoController@update')->name('meritos.update')
		->middleware('permission:meritos.edit');

	Route::get('meritos/{merito}', 'MeritoController@show')->name('meritos.show')
		->middleware('permission:meritos.show');

	Route::delete('meritos/{merito}', 'MeritoController@destroy')->name('meritos.destroy')
		->middleware('permission:meritos.destroy');

	Route::get('meritos/{merito}/edit', 'MeritoController@edit')->name('meritos.edit')
		->middleware('permission:meritos.edit');

	//Archivo
	Route::post('archivos/store', 'ArchivoController@store')->name('archivos.store')
	->middleware('permission:archivos.create');

	Route::get('archivos', 'ArchivoController@index')->name('archivos.index')
		->middleware('permission:archivos.index');

	Route::get('archivos/create', 'ArchivoController@create')->name('archivos.create')
		->middleware('permission:archivos.create');

	Route::put('archivos/{archivo}', 'ArchivoController@update')->name('archivos.update')
		->middleware('permission:archivos.edit');

	Route::get('archivos/{convocatoria}', 'ArchivoController@show')->name('archivos.show')
		->middleware('permission:archivos.show');

	Route::delete('archivos/{archivo}', 'ArchivoController@destroy')->name('archivos.destroy')
		->middleware('permission:archivos.destroy');

	Route::get('archivos/{archivo}/edit', 'ArchivoController@edit')->name('archivos.edit')
		->middleware('permission:archivos.edit');

	//Certificados
	Route::post('certificados/store', 'CertificadoController@store')->name('certificados.store')
	->middleware('permission:certificados.create');

	Route::get('meritos/{postulation}/certificados', 'CertificadoController@showCertificados')->name('certificados.index')
		->middleware('permission:certificados.index');

	Route::get('certificados/create', 'CertificadoController@create')->name('certificados.create')
		->middleware('permission:certificados.create');

	Route::put('certificados/{certificado}', 'CertificadoController@update')->name('certificados.update')
		->middleware('permission:certificados.edit');

	Route::get('certificados/{certificado}', 'CertificadoController@show')->name('certificados.show')
		->middleware('permission:certificados.show');

	Route::delete('certificados/{certificado}', 'CertificadoController@destroy')->name('certificados.destroy')
			->middleware('permission:certificados.destroy');

	Route::get('certificados/{certificado}/view', 'CertificadoController@viewPDF')->name('certificados.viewPDF')
		->middleware('permission:archivos.show');

	Route::get('certificados/{certificado}/edit', 'CertificadoController@edit')->name('certificados.edit')
		->middleware('permission:certificados.edit');
});