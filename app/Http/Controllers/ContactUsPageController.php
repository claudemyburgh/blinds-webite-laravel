<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ContactUsPageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return View
     */
    public function __invoke(): View
    {
        return view('contact-us');
    }
}
