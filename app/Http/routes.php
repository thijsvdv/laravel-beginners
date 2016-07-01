<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'WelcomeController@home']);
    
Route::get('/about', ['as' => 'about', function () {
    return view('pages.about', [
        'team' => [
            'Mike',
            'Mathieu',
            'Wouter',
            'Christoffel',
            'Koen',
            'Thijs',
            'Kurt'
        ]
    ]);
}]);

// Without this route, the action-url to WelcomeController@test in app.blade.php would not work!
// Laravel would not know where to go...
Route::get('/test', ['uses' => 'WelcomeController@test']);