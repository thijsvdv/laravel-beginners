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

Route::get('/', ['as' => 'home', function () {
    return view('pages.welcome', [
        'name' => 'Thijs'
    ]);
}]);
    
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
