<?php
use Illuminate\Routing\Router;

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
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->get('/login', 'LoginController@login');
    $router->post('/login', 'LoginController@postLogin');

});