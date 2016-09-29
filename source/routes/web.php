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
 *  c.  data        //array
 * Other contextual keys may be added
**/

Route::get('/', function () {
    return redirect()->route('_app.routes');
});

//for troubleshooting purposes
if(config('app.env')=='local' or config('app.debug'))
{
    $view_dir = '_app.';
    Route::group(['as'=>'_app.'], function () use ($view_dir)
    {
        Route::get('/routes', ['as'=>'routes', 'uses'=>function () use ($view_dir)
        {
            return view($view_dir.'routes', ['routes'=>Route::getRoutes(), 'text'=>"App. Routes! &lt;/&gt;, <br/>Work in progress..."]);
        }]);
        Route::get('/console', ['as'=>'console', 'uses'=>function () use ($view_dir)
        {
            /**
             * TODO
             * GUI Interface for running laravel artisan and other console commands
             */
            return view($view_dir.'routes', ['routes'=>Route::getRoutes(), 'text'=>"App. Routes! &lt;/&gt;, <br/>Work in progress..."]);
        }]);
    });
}

//-------------AUTHENTICATION, REGISTRATION & PASSWORD RESET ROUES-----------------//
Route::group(['as'=>'auth.', 'namespace'=>'Auth', 'middleware'=>['m'=>'guest'] ], function ()
{
    // Authentication Routes...
    Route::get('login', ['as' => 'login', 'uses' => 'LoginController@showLoginForm']);
    Route::post('login', ['as' => 'login', 'uses' => 'LoginController@login']);
    Route::post('logout', ['as' => 'logout', 'uses' => 'LoginController@logout'])->middleware( ['m'=>'auth'] );

    // Registration Routes...
    Route::get('register', ['as' => 'register', 'uses' => 'RegisterController@showRegistrationForm']);
    Route::post('register', ['as' => 'register', 'uses' => 'RegisterController@register']);

    // Password Reset Routes...
    Route::get('password/reset', ['as' => 'password.reset', 'uses' => 'ForgotPasswordController@showLinkRequestForm']);
    Route::post('password/email', ['as' => 'password.email', 'uses' => 'ForgotPasswordController@sendResetLinkEmail']);
    Route::get('password/reset/{token}', ['as' => 'password.reset', 'uses' => 'ResetPasswordController@showResetForm']);
    Route::post('password/reset', ['as'=>'password.reset','uses' => 'ResetPasswordController@reset']);
});

//-------------AUTHENTICATION, REGISTRATION & PASSWORD RESET ROUES-----------------//
Route::group(['as'=>'auth.', 'namespace'=>'Auth', 'middleware'=>['m'=>'guest'] ], function ()
{
    // Authentication Routes...
    Route::get('login', ['as' => 'login', 'uses' => 'LoginController@showLoginForm']);
    Route::post('login', ['as' => 'login', 'uses' => 'LoginController@login']);
    Route::post('logout', ['as' => 'logout', 'uses' => 'LoginController@logout'])->middleware( ['m'=>'auth'] );

    // Registration Routes...
    Route::get('register', ['as' => 'register', 'uses' => 'RegisterController@showRegistrationForm']);
    Route::post('register', ['as' => 'register', 'uses' => 'RegisterController@register']);

    // Password Reset Routes...
    Route::get('password/reset', ['as' => 'password.reset', 'uses' => 'ForgotPasswordController@showLinkRequestForm']);
    Route::post('password/email', ['as' => 'password.email', 'uses' => 'ForgotPasswordController@sendResetLinkEmail']);
    Route::get('password/reset/{token}', ['as' => 'password.reset', 'uses' => 'ResetPasswordController@showResetForm']);
    Route::post('password/reset', ['as'=>'password.reset','uses' => 'ResetPasswordController@reset']);
});
