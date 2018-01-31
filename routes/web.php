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

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->middleware('guest')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');



//Route::get('/home', 'HomeController@index')->name('home');
//Route::post('/login_auth','Auth\LoginController@login_validate');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home_alerta_cumples','HomeController@get_cumples_hoy');
Route::get('/perfil','Usuarios\PerfilController@index')->name('perfil');
Route::post('/cambiar_passw','Usuarios\PerfilController@cambiar_password');
Route::get('/cumpleanios','Cumple\CumpleController@index');
Route::get('/get_cumples','Cumple\CumpleController@get_cumples');
Route::get('/vacaciones','MisConsultas\VacacionesController@index');
Route::get('/calendario','Calendario\EventosController@index');
Route::get('/calendario_eventos','Calendario\EventosController@eventos_show');
Route::POST('/insert_evento','Calendario\EventosController@insert_evento')->name('insert.evento');
Route::get('/get_eventos','Calendario\EventosController@get_eventos');
Route::get('/editar_evento_form','Calendario\EventosController@get_edit_evento');
Route::post('/editar_evento','Calendario\EventosController@update_evento');
Route::get('/galerias','Galerias\GaleriasController@index');
Route::POST('/upload_images','Galerias\GaleriasController@upload_image');
Route::get('/imagenes_evento','Galerias\GaleriasController@imagenes_evento');
Route::get('/subir_archivos_dl','Calendario\EventosController@subir_archivos_dl');
Route::get('/eliminar_archivos_dl','Calendario\EventosController@eliminar_archivos_dl');
Route::get('/eliminar_archivos','Calendario\EventosController@eliminar_archivos');
Route::get('/logs','Logs\LogsController@index');

/************ MAP ROUTES **********/

Route::get('/maps','CentroControl\CentroControlController@index');
Route::get('/tracking_veh','CentroControl\CentroControlController@tracking_vehiculo');

/************ MIS CONSULTAS ROUTES **********/
Route::get('/vacaciones','MisConsultas\VacacionesController@index');
Route::get('/prestamos','MisConsultas\PrestamosController@index');
Route::get('/boletas','MisConsultas\BoletasController@index');
Route::get('/boletas2','MisConsultas\BoletasController@index');
Route::get('/vacaciones_personal','MisConsultas\VacacionesController@personal_vacaciones');

/************ EVALUACIONES ROUTES **********/
Route::get('/admin_evaluacion','Evaluaciones\EvaluacionesController@index');
Route::get('/modal_nueva_evaluacion','Evaluaciones\EvaluacionesController@modal_nueva_evaluacion');
Route::get('/modal_nueva_pregunta_simple','Evaluaciones\EvaluacionesController@modal_nueva_pregunta_simple');
Route::get('/modal_nueva_pregunta_vf','Evaluaciones\EvaluacionesController@modal_nueva_pregunta_vf');
Route::get('/modal_nueva_pregunta_multiple','Evaluaciones\EvaluacionesController@modal_nueva_pregunta_multiple');

/************ FIRMA OUTLOOK ROUTES **********/
Route::get  ('/modal_ver_firma','Usuarios\PerfilController@modal_ver_firma');

/**************** RADAR ROUTES ***************/
Route::get  ('/noticias','HomeController@noticias');

/************ CHAT ROUTES **********/
Route::get('/chat', 'Chat\MessageController@index');
Route::get('messages', 'Chat\MessageController@fetchMessages');
Route::post('messages', 'Chat\MessageController@sendMessage');
Route::get('contactos','Chat\MessageController@fetchContacts');
