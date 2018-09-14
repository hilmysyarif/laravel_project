<?php

namespace App\Http\Controllers;

class FrontendController extends Controller
{
    /**
     * Serve the angular application.
     *
     * @return JSON
     */
    public function index()
    {
        return view('layouts.frontend.frontend');
    }

    /**
     * Page for unsupported browsers.
     *
     * @return JSON
     */
    public function unsupported()
    {
        return view('unsupported_browser');
    }
}
