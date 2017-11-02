
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
Route::get('/posts', 'PostsController@index');

Route::get('/views', 'ViewsController@index');



Route::get('/action-types', 'ActionTypesController@index');

Route::get('/actions', 'ActionsController@index');

Route::get('/firms', 'FirmsController@index');

Route::get('/ip-cities', 'IpCitiesController@index');

Route::get('/products', 'ProductsController@index');
// under this!!!
Route::get('/ip-countries', 'IpCountriesController@index');

Route::get('/ip-states', 'IpStatesController@index');

Route::get('/ip-addresses', 'IpAddressesController@index');

Route::get('/migrations', 'MigrationsController@index');

Route::get('/user-actions', 'UserActionsController@index');

Route::get('/users', 'UsersController@index');



Route::get('/example', array('middleware' => 'cors', 'uses' => 'ExampleController@index'));
