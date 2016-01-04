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
Route::get('executeSearch','SearchController@executeSearch');
Route::get('searchResults','SearchController@searchResults');
Route::get('executeComment','CommentLikeController@executeComment');
Route::get('showComment','CommentLikeController@showComment');
Route::get('executeLike','CommentLikeController@executeLike');
Route::get('requestConnection','ConnectionController@requestConnection');
Route::post('confirmConnection','ConnectionController@confirmConnection');
Route::post('removeConnection','ConnectionController@removeConnection');
Route::get('cancelRequest','ConnectionController@cancelRequest');
Route::post('imageUpload','ImageUploadController@storeProfileImage');


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
Route::post('profile/addeducation', 'ProfileController@educationStore');
Route::post('profile/addproject', 'ProfileController@projectStore');
Route::post('profile/addexperience', 'ProfileController@experienceStore');
Route::get('profile','ProfileController@index');
Route::get('showprofile/{id}','ProfileController@show');

Route::controllers([
   'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);
