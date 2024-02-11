<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function attendantList()
    {
        return view('attendant-list');
    }

    public function calendar()
    {
        return view('calendar');
    }

    public function chat()
    {
        return view('chat');
    }

    public function create()
    {
        return view('create');
    }

    public function e()
    {
        return view('e');
    }

    public function element()
    {
        return view('element');
    }

    public function eventDetails()
    {
        return view('event-details');
    }

    public function eventList()
    {
        return view('event-list');
    }

    public function landingPage()
    {
        return view('landing-page');
    }

    public function profile()
    {
        return view('profile');
    }

    public function scheduleList()
    {
        return view('schedule-list');
    }

    public function setting()
    {
        return view('setting');
    }

    public function signIn()
    {
        return view('signin');
    }

    public function signUp()
    {
        return view('signup');
    }

    public function speakerList()
    {
        return view('speaker-list');
    }

    public function tParams()
    {
        return view('t-params');
    }

    public function venue()
    {
        return view('venue');
    }

    public function index()
    {
        return view('index');
    }

    public function indexMain()
    {
        return view('index-main');
    }
    
}
