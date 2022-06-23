<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function faq()
    {
        return view('frontend.faq');
    }

    public function plan()
    {
        return view('frontend.plan');
    }

    public function service()
    {
        return view('frontend.services');
    }

    public function login()
    {
        return view('frontend.login');
    }

    public function resetpassword()
    {
        return view('frontend.reset_password');
    }

    public function register()
    {
        return view('frontend.register');
    }
}
