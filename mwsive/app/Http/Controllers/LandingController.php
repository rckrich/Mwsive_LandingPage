<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.home');
    }
    public function our_story()
    {
        return view('landing.our_story');
    }
    public function faq()
    {
        return view('landing.faq');
    }
    public function tc()
    {
        return view('landing.external_links');
    }
}
