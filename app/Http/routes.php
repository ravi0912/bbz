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

//routes for mail
Route::get('sendMail','MailController@sendMail');
Route::get('viewAllMail','MailController@viewAllMail');

// routes for search
Route::get('executeSearch','SearchController@executeSearch');
Route::get('searchResults','SearchController@searchResults');


//routes for comment and like
Route::get('executeComment','CommentLikeController@executeComment');
Route::get('showComment','CommentLikeController@showComment');
Route::get('executeLike','CommentLikeController@executeLike');

//routes for notificattion
Route::get('showNotification','NotificationController@showNotification');

//routes for connection
Route::get('requestConnection','ConnectionController@requestConnection');
Route::post('confirmConnection','ConnectionController@confirmConnection');
Route::post('removeConnection','ConnectionController@removeConnection');
Route::get('cancelRequest','ConnectionController@cancelRequestAuthUser');
Route::get('showConnections/{id}','ConnectionController@show');
Route::get('showConnectionRequest','ConnectionController@showConnectionRequest');
Route::get('confirmConnectionNotification','ConnectionController@confirmConnectionNotification');
Route::get('cancelConnectionNotification','ConnectionController@cancelConnectionNotification');

//Skill Add, Delete, Boost
Route::get('addSkill','SkillController@addSkill');
Route::get('deleteSkill','SkillController@deleteSkill');
Route::get('boostSkill','SkillController@boostSkill');
Route::get('unBoostSkill','SkillController@unBoostSkill');


//routes for Image upload
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
// routes for status
Route::resource('status', 'StatusController');
Route::get('showstatus/{id}','StatusController@show');
Route::post('destroy','StatusController@destroy');

//routes for Profile Data Add
Route::post('profile/profileAdd', 'ProfileController@profileAdd');
Route::post('profile/addeducation', 'ProfileController@educationStore');
Route::post('profile/addproject', 'ProfileController@projectStore');
Route::post('profile/addexperience', 'ProfileController@experienceStore');

// routes for profile update
Route::get('profileUpdateShow', 'ProfileController@profileUpdateShow');
Route::post('profile/profileUpdate', 'ProfileController@profileUpdate');
Route::get('educationUpdateShow', 'ProfileController@educationUpdateShow');
Route::get('experienceUpdateShow', 'ProfileController@experienceUpdateShow');
Route::get('projectUpdateShow', 'ProfileController@projectUpdateShow');
Route::get('profile','ProfileController@index');
Route::get('showprofile/{id}','ProfileController@show');
Route::post('profile/educationUpdate', 'ProfileController@educationUpdate');
Route::post('profile/experienceUpdate', 'ProfileController@experienceUpdate');
Route::post('profile/projectUpdate', 'ProfileController@projectUpdate');

Route::controllers([
   'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);
