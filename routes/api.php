
<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/posts', array('middleware' => 'cors', 'uses' => 'PostsController@index'));

Route::get('/views', array('middleware' => 'cors', 'uses' => 'ViewsController@index'));

Route::get('/action-types', array('middleware' => 'cors', 'uses' => 'ActionTypesController@index'));

Route::get('/actions', array('middleware' => 'cors', 'uses' => 'ActionsController@index'));

Route::get('/firms', array('middleware' => 'cors', 'uses' => 'FirmsController@index'));

Route::get('/ip-cities', array('middleware' => 'cors', 'uses' => 'IpCitiesController@index'));

Route::get('/products', array('middleware' => 'cors', 'uses' => 'ProductsController@index'));

Route::get('/ip-countries', array('middleware' => 'cors', 'uses' => 'IpCountriesController@index'));

Route::get('/ip-states', array('middleware' => 'cors', 'uses' => 'IpStatesController@index'));

Route::get('/ip-addresses', array('middleware' => 'cors', 'uses' => 'IpAddressesController@index'));

Route::get('/migrations', array('middleware' => 'cors', 'uses' => 'MigrationsController@index'));

Route::get('/user-actions', array('middleware' => 'cors', 'uses' => 'UserActionsController@index'));

Route::get('/users', array('middleware' => 'cors', 'uses' => 'UsersController@index'));

Route::get('/example', array('middleware' => 'cors', 'uses' => 'ExampleController@index'));
