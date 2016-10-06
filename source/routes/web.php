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

    Route::group(['as' => '_app.'], function () {
        Route::get('/routes', ['as' => 'routes', 'uses' => 'WebController@showAppRoutes']);
        Route::get('/console', ['as' => 'console', 'uses' => 'WebController@showAppConsole']);
    });
}

//------------SITE'S PUBLIC PAGES----------------//
Route::group(['as' => 'pub.'], function () {

    Route::get('/', ['as' => 'home', 'uses' => 'WebController@showHomePage']);
    Route::get('club', ['as' => 'club', 'uses' => 'WebController@showClubInfo']);
    Route::get('event', ['as' => 'event', 'uses' => 'WebController@showEventCalendar']);
    Route::get('event/{slug}', ['as' => 'event.info', 'uses' => 'WebController@showEventInfo']);
    Route::get('gallery', ['as' => 'gallery', 'uses' => 'WebController@showMediaGallery']);
    Route::get('gallery/{slug}', ['as' => 'gallery.album', 'uses' => 'WebController@showMediaAlbum']);
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

//------------ADMIN PANEL PAGES----------------//
Route::group(['as' => 'admin.', 'prefix'=>'admin', 'middleware'=>['auth']], function () {

    //Dashboard
    Route::get('/', ['as' => 'dashboard', 'uses' => 'WebController@showAdminDashboard']);

    //Events
    Route::get('event', ['as' => 'event.manager', 'uses' => 'WebController@showEventManager']);
    Route::get('event/edit/{id?}', ['as' => 'event.editor', 'uses' => 'WebController@showEventEditor']);
    Route::post('event/save', ['as' => 'event.save', 'uses' => 'Core\EventController@save']);
    Route::post('event/delete', ['as' => 'event.delete', 'uses' => 'Core\EventController@delete']);

    //Files
    Route::get('file', ['as' => 'file.browser', 'uses' => 'WebController@showFileBrowser']);
    Route::get('file/manage', ['as' => 'file.manager', 'uses' => 'WebController@showFileManager']);
    Route::post('file/upload', ['as' => 'file.upload', 'uses' => 'Core\FileController@upload']);
    Route::post('file/edit', ['as' => 'file.edit', 'uses' => 'Core\FileController@edit']);
    Route::post('file/delete', ['as' => 'file.delete', 'uses' => 'Core\FileController@delete']);

    //Gallery
    Route::get('gallery', ['as' => 'gallery.manager', 'uses' => 'WebController@showGalleryManager']);
    Route::get('gallery/edit/{id?}', ['as' => 'gallery.editor', 'uses' => 'WebController@showGalleryEditor']);
    Route::post('gallery/save', ['as' => 'gallery.save', 'uses' => 'Core\GalleryController@save']);
    Route::post('gallery/delete', ['as' => 'gallery.delete', 'uses' => 'Core\GalleryController@delete']);

    //Pages
    Route::get('page', ['as' => 'page.manage', 'uses' => 'WebController@showPageManager']);
    Route::get('page/edit/{id?}', ['as' => 'page.editor', 'uses' => 'WebController@showPageEditor']);
    Route::post('page/save', ['as' => 'page.save', 'uses' => 'Core\PageController@save']);
    Route::post('page/delete', ['as' => 'page.delete', 'uses' => 'Core\PageController@delete']);

    //Projects
    Route::get('project', ['as' => 'project.manage', 'uses' => 'WebController@showProjectManager']);
    Route::get('project/edit/{id?}', ['as' => 'project.editor', 'uses' => 'WebController@showProjectEditor']);
    Route::post('project/save', ['as' => 'project.save', 'uses' => 'Core\ProjectController@save']);
    Route::post('project/delete', ['as' => 'project.delete', 'uses' => 'Core\ProjectController@delete']);

    //Publications
    Route::get('publication', ['as' => 'publication.manage', 'uses' => 'WebController@showPublicationManager']);
    Route::get('publication/edit/{id?}', ['as' => 'publication.editor', 'uses' => 'WebController@showPublicationEditor']);
    Route::post('publication/save', ['as' => 'publication.save', 'uses' => 'Core\PublicationController@save']);
    Route::post('publication/delete', ['as' => 'publication.delete', 'uses' => 'Core\PublicationController@delete']);

    //Sponsors
    Route::get('sponsor', ['as' => 'sponsor.manage', 'uses' => 'WebController@showSponsorManager']);
    Route::get('sponsor/edit/{id?}', ['as' => 'sponsor.editor', 'uses' => 'WebController@showSponsorEditor']);
    Route::post('sponsor/save', ['as' => 'sponsor.save', 'uses' => 'Core\SponsorController@save']);
    Route::post('sponsor/delete', ['as' => 'sponsor.delete', 'uses' => 'Core\SponsorController@delete']);

    //Teams
    Route::get('team', ['as' => 'team.manage', 'uses' => 'WebController@showTeamManager']);
    Route::get('team/edit/{id?}', ['as' => 'team.editor', 'uses' => 'WebController@showTeamEditor']);
    Route::post('team/save', ['as' => 'team.save', 'uses' => 'Core\TeamController@save']);
    Route::post('team/delete', ['as' => 'team.delete', 'uses' => 'Core\TeamController@delete']);

});
