<?php
/**
 * Project: srcng.com
 * Author:  Chukwuemeka Nwobodo (jcnwobodo@gmail.com)
 * Date:    9/29/2016
 * Time:    2:15 PM
 **/

namespace App\Http\Controllers;

class WebController extends Controller
{
    //Tools
    public function showAppRoutes()
    {
        $data['routes'] = \Route::getRoutes();
        $data['text'] = "App. Routes! &lt;/&gt;, <br/>Work in progress...";

        return view('_app.routes', $data);
    }

    public function showAppConsole()
    {
        return $this->showAppRoutes();
    }

    //Public Pages
    public function showHomePage()
    {
        $data = [];

        return view('pages.home', $data);
    }

    public function showClubInfo()
    {
        $data = [];

        return view('pages.club_info', $data);
    }

    public function showEventCalendar()
    {
        $data = [];

        return view('pages.event_calender', $data);
    }

    public function showEventInfo($slug)
    {
        $data['slug'] = $slug;

        return view('pages.event_info', $data);
    }

    public function showMediaGallery()
    {
        $data = [];

        return view('pages.media_gallery', $data);
    }

    public function showMediaAlbum($slug)
    {
        $data['slug'] = $slug;

        return view('pages.media_album', $data);
    }

    public function showProjectGallery()
    {
        $data = [];

        return view('pages.project_gallery', $data);
    }

    public function showProjectInfo($slug)
    {
        $data['slug'] = $slug;

        return view('pages.project_info', $data);
    }

    public function showContactPage()
    {
        $data = [];

        return view('pages.contact_page', $data);
    }

    public function resolvePage($slug)
    {
        $data['slug'] = $slug;

        return view('pages.generic_page', $data);
    }

    public function redirectToBlog()
    {
        $this->showHomePage();
    }

    //Admin Panel
    public function showAdminDashboard()
    {
        $data = [];

        return view('admin.', $data);
    }

    public function showEventManager()
    {
        $data = [];

        return view('admin.', $data);
    }

    public function showEventEditor($id = null)
    {
        $data = [];

        return view('admin.', $data);
    }

    public function showFileBrowser()
    {
        $data = [];

        return view('admin.', $data);
    }

    public function showFileManager()
    {
        $data = [];

        return view('admin.', $data);
    }

    public function showGalleryManager()
    {
        $data = [];

        return view('admin.', $data);
    }

    public function showGalleryEditor()
    {
        $data = [];

        return view('admin.', $data);
    }

    public function showPageManager()
    {
        $data = [];

        return view('admin.', $data);
    }

    public function showPageEditor()
    {
        $data = [];

        return view('admin.', $data);
    }

    public function showProjectManager()
    {
        $data = [];

        return view('admin.', $data);
    }

    public function showProjectEditor()
    {
        $data = [];

        return view('admin.', $data);
    }

    public function showPublicationManager()
    {
        $data = [];

        return view('admin.', $data);
    }

    public function showPublicationEditor()
    {
        $data = [];

        return view('admin.', $data);
    }

    public function showSponsorManager()
    {
        $data = [];

        return view('admin.', $data);
    }

    public function showSponsorEditor()
    {
        $data = [];

        return view('admin.', $data);
    }

    public function showTeamManager()
    {
        $data = [];

        return view('admin.', $data);
    }

    public function showTeamEditor()
    {
        $data = [];

        return view('admin.', $data);
    }
}