<?php
/**
 *--------------------------------------------------------------------------
 * Web Routes
 *
 * README FIRST
 *--------------------------------------------------------------------------
 * All routes should make use of any of the methods listed below to call
 * controller methods (actions)
 *
 *  1.  Use of Route facade eg.
 *
 *      Route::get('url/{param1}/{param1?}', ['as'=>"route_name", 'uses'=>"MyController@actionMethod"]);
 *
 *      This returns a json encoded array to the web client (array, since this projects convention demands
 *      that all controller methods should return arrays). Laravel encode arrays and objects
 *      responses using standard PHP json_encode() function
 *
 * 2.   Use of run_action() function (defined in app/Http/helpers.php) to obtain the array return values from
 *      controller methods and then pass it on to the desired view eg.
 *
 *      Route::any('/', function ()
 *      {
 *          $data = run_action('DirectoryController@index', $args=[], $methods=[], $namespace='App\Http\Controllers');
 *          return view('welcome', $data);
 *      })->name('route_name');
 *
 * A Controller method should return an array with these mandatory keys
 *  a.  status      //boolean
 *  b.  message     //string
 * Other contextual keys may be added
 **/

//for troubleshooting purposes
if (config('app.env') == 'local' or config('app.debug')) {

    Route::group(['as' => '_app.', 'namespace' => 'Site'], function () {
        Route::get('/routes', ['as' => 'routes', 'uses' => 'WebController@showAppRoutes']);
        Route::get('/console', ['as' => 'console', 'uses' => 'WebController@showAppConsole']);
    });
}

//------------SITE'S PUBLIC PAGES----------------//
Route::group(['as' => 'pub.'], function () {

    Route::get('/', ['as' => 'home', 'uses' => 'WebController@showHomePage']);
    Route::get('club', ['as' => 'club', 'uses' => 'WebController@showClubInfo']);
    Route::get('event', ['as' => 'event', 'uses' => 'WebController@showEventCalendar']);
    Route::get('event/{slug}', ['as' => 'event_info', 'uses' => 'WebController@showEventInfo']);
    Route::get('gallery', ['as' => 'gallery', 'uses' => 'WebController@showMediaGallery']);
    Route::get('gallery/{slug}', ['as' => 'gallery_album', 'uses' => 'WebController@showMediaAlbum']);
    Route::get('project', ['as' => 'project', 'uses' => 'WebController@showProjectGallery']);
    Route::get('project/{slug}', ['as' => 'project.view', 'uses' => 'WebController@showProjectInfo']);
    Route::get('contact', ['as' => 'contact', 'uses' => 'WebController@showContactPage']);
    Route::get('p/{slug}', ['as' => 'page', 'uses' => 'WebController@resolvePage']);
    Route::get('blog', ['as' => 'blog', 'uses' => 'WebController@redirectToBlog']);
});

//-------------AUTHENTICATION, REGISTRATION & PASSWORD RESET ROUES-----------------//
Route::group(['as' => 'auth.', 'namespace' => 'Auth', 'middleware' => ['m' => 'guest']], function () {

    // Authentication Routes...
    Route::get('login', ['as' => 'login', 'uses' => 'LoginController@showLoginForm']);
    Route::post('login', ['as' => 'login', 'uses' => 'LoginController@login']);
    Route::post('logout', ['as' => 'logout', 'uses' => 'LoginController@logout'])->middleware(['m' => 'auth']);

    // Registration Routes...
    Route::get('register', ['as' => 'register', 'uses' => 'RegisterController@showRegistrationForm']);
    Route::post('register', ['as' => 'register', 'uses' => 'RegisterController@register']);

    // Password Reset Routes...
    Route::get('password/reset', ['as' => 'password.reset', 'uses' => 'ForgotPasswordController@showLinkRequestForm']);
    Route::post('password/email', ['as' => 'password.email', 'uses' => 'ForgotPasswordController@sendResetLinkEmail']);
    Route::get('password/reset/{token}', ['as' => 'password.reset', 'uses' => 'ResetPasswordController@showResetForm']);
    Route::post('password/reset', ['as' => 'password.reset', 'uses' => 'ResetPasswordController@reset']);
});

