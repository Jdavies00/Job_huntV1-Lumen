<?php
// use App\Http\Controllers\CommJobsBoardController;
use Illuminate\Http\Request;

/** @var \Laravel\Lumen\Routing\Router $router */

// use Illuminate\Http\Client\Request;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('id/{id}', function ($id) {
    return 'id: ' . $id;
});

//make sure the routes are the same when getting back to them 

$router->group(['middleware' => 'auth'], function () use ($router) {
    //myJobdsBoard
    $router->get('/myJobsBoard','MyJobsBoardController@index');//get myJobs
    $router->delete('/myJobsBoard/{id}','MyJobsBoardController@delete');//deletmyJobs by id
    // $router->post('/myJobsBoard','MyJobsBoardController@create')//amI creating or ADDING a job to myJobs Board
    $router->get('/logout', 'UsersController@logout');

    //AllJobs Board
    $router->get('/llJobs','CommJobsBoardController@index');//read change to get alljobs
    $router->post('/allJobs','CommJobsBoardController@create');//create

    $router->get('/api/user', function (Request $request) {
        $user = $request->user();
        return $user->toArray();
    });
});

$router->post('/register', 'UsersController@register');


