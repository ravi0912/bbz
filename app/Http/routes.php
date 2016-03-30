<?php

/*
 * The Homepage
 */

Route::get('home', 'PagesController@home');
Route::get('blogs','PagesController@blogs');
//routes for showFullBlogs
Route::get('showFullBlogs1','PagesController@showFullBlogs1');
Route::get('showFullBlogs2','PagesController@showFullBlogs2');
Route::get('showFullBlogs3','PagesController@showFullBlogs3');
Route::get('showFullBlogs4','PagesController@showFullBlogs4');
Route::get('showFullBlogs5','PagesController@showFullBlogs5');

Route::get('home1','PagesController@home1');


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
Route::get('viewAllMail/{id}','MailController@viewAllMail');

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
Route::get('peopleMayKnow/{id}','ConnectionController@peopleMayKnow');
Route::get('allPeopleMayKnow/{id}','ConnectionController@allPeopleMayKnow');


//Skill Add, Delete, Boost
Route::get('addSkill','SkillController@addSkill');
Route::get('deleteSkill','SkillController@deleteSkill');
Route::get('boostSkill','SkillController@boostSkill');
Route::get('unBoostSkill','SkillController@unBoostSkill');


//routes for Image upload
Route::post('imageUpload','ImageUploadController@storeProfileImage');
Route::post('storeProjectImage','ImageUploadController@storeProjectImage');

//Carousel Image Active
Route::get('activeImageCarousel','ImageUploadController@activeImageCarousel');




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

//Feature Controller
Route::get('byelaws','FeatureController@byelaws');
Route::get('tender','FeatureController@tender');
Route::post('contactUs','PagesController@contactUs');

// routes for status
Route::resource('status', 'StatusController');
Route::get('showStatus/{id}','StatusController@show');
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

//routes for auth
Route::controllers([
   'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);

//routes for admin
Route::get('dfbdfdwisdybcmzmaoie25327dbsjc67819818ds8789781nsanan1839138nadjk3230239020232wwug', 'AdminController@admin');
Route::post('pinAuth', 'AdminController@pinAuth');
Route::get('dataFeed', 'AdminController@dataFeed');
Route::get('viewAdminByelaws','AdminController@viewAdminByelaws');
Route::post('addAdminByelaws','AdminController@addAdminByelaws');
Route::get('viewAdminTenders','AdminController@viewAdminTenders');
Route::post('addAdminTenders','AdminController@addAdminTenders');
Route::get('showEditAdminTenders/{id}','AdminController@showEditAdminTenders');
Route::post('updateAdminTenders','AdminController@updateAdminTenders');
Route::get('showEditAdminByelaws/{id}','AdminController@showEditAdminByelaws');
Route::post('updateAdminByelaws','AdminController@updateAdminByelaws');
Route::post('createBlog','BlogController@store');
Route::get('createBlogForm','BlogController@blogForm');


//routes for Pages
Route::get('createPageForm','WorkstationPageController@createPageForm');
Route::get('showCreatePageForm','WorkstationPageController@showCreatePageForm');
Route::post('createPage','WorkstationPageController@create');
Route::get('requestSubcategory','WorkstationPageController@requestSubcategory');
Route::get('showPage/{id}','WorkstationPageController@show');
Route::post('storeStatusPage','WorkstationPageController@store');
Route::get('linkpreview','PagesController@linkpreview');
Route::get('ajaxlinkpreview','PagesController@ajaxlinkpreview');







//routes for blog
Route::get('blog','BlogController@index');
Route::get('viewBlog/{id}','BlogController@show');

