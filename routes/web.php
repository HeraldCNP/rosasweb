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
Route::get('/', 'RoutesController@home')->name('pages.index');
Route::get('sedes/antecedentes', 'RoutesController@antecedentes')->name('pages.antecedentes');
Route::get('sedes/autoridades', 'RoutesController@autoridades')->name('pages.autoridades');
Route::get('sedes/mision', 'RoutesController@mision')->name('pages.mision');
Route::get('sedes/telefonosip', 'RoutesController@telefonosip')->name('pages.telefonosip');
Route::get('sedes/organigrama', 'RoutesController@organigrama')->name('pages.organigrama');

Route::get('unidad/administrativa', 'RoutesController@administrativa')->name('pages.administrativa');
Route::get('unidad/auditoria', 'RoutesController@auditoria')->name('pages.auditoria');
Route::get('unidad/epidemiologia', 'RoutesController@epidemiologia')->name('pages.epidemiologia');
Route::get('unidad/juridica', 'RoutesController@juridica')->name('pages.juridica');
Route::get('unidad/direccion', 'RoutesController@direccion')->name('pages.direccion');
Route::get('unidad/planificacion', 'RoutesController@planificacion')->name('pages.planificacion');
Route::get('unidad/redes', 'RoutesController@redes')->name('pages.redes');
Route::get('unidad/promocion', 'RoutesController@promocion')->name('pages.promocion');
Route::get('unidad/seguros', 'RoutesController@seguros')->name('pages.seguros');

Route::get('articulos', 'RoutesController@articles')->name('pages.articles');
Route::get('contacto', 'RoutesController@contacto')->name('pages.contacto');
Route::get('galeria', 'RoutesController@galeria')->name('pages.galeria');
Route::get('documentos', 'RoutesController@documentos')->name('pages.documentos');




Route::get('noticia/{post}', 'PostsController@show')->name('posts.show');
Route::get('noticias', 'PostsController@index')->name('posts.index');
Route::get('buscar', 'PostsController@busqueda')->name('posts.buscar');
Route::get('categorias/{category}', 'CategoriesController@show')->name('categories.show');
Route::get('tags/{tag}', 'TagsController@show')->name('tags.show');

Route::group(['prefix' => 'admin',
              'namespace' => 'Admin',
              'middleware' => 'auth'],
    function(){
        Route::get('/', 'AdminController@index')->name('dashboard');

        Route::resource('posts', 'PostsController', ['except' => 'show', 'as' => 'admin']);
        Route::resource('users', 'UsersController', ['as' => 'admin']);
        Route::middleware('role:Admin')
            ->put('users/{user}/roles', 'UsersRolesController@update')
            ->name('admin.users.roles.update');
        Route::middleware('role:Admin')
            ->put('users/{user}/permissions', 'UsersPermissionsController@update')
            ->name('admin.users.permissions.update');
        Route::resource('students', 'StudentsController', ['as' => 'admin']);

        Route::post('posts/{post}/photos', 'PhotosController@store')->name('admin.posts.photos.store');
        Route::delete('photos/{photo}', 'PhotosController@destroy')->name('admin.photos.destroy');

        //Images
        Route::resource('images', 'ImageController', ['except' => 'show', 'as' => 'admin']);
        Route::resource('documents', 'DocumentController', ['except' => 'show', 'as' => 'admin']);
});









// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');