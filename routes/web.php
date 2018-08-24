<?php
use App\Http\Controllers\StudentContoller;
use App\Http\Controllers\Contoller;
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


//The url for now will be /faculty/{emailUri}/classes

//Create a faculty route that returns the classes that he has taught ever

$router->get('/faculty/{emailUri}/classes','FacultyController@getClasses');

$router->get('/faculty/{emailUri}/classes/{term}', 'FacultyController@getClassesWithTerm');

$router->get('/student/{email}/classes', [
  'middleware' => 'APIkey',
  'uses' => 'StudentController@getStudentClasses'
]);
