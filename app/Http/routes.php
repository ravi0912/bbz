<?php

/*
 * The Homepage
 */

Route::get('home', 'PagesController@home');

/*
Route::get('home', function() {
    if (Auth::guest()) {
        return redirect()->action('PagesController@home');
    }
    else
    {
        return redirect()->action('StatusController@index');
    }
});
*/

Route::get('/', function()
{
    if (Auth::guest()) {
        return redirect()->action('PagesController@home');
    }
    else
        {
            return redirect()->action('StatusController@index');
        }
});
Route::get('index', function()
{
    if (Auth::guest()) {
        return redirect()->action('PagesController@home');
    }
    else
    {
        return redirect()->action('StatusController@index');
    }
});

Route::resource('status', 'StatusController');



Route::controllers([
   'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);
