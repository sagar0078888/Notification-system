<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        notify()->success('welcome to our portal!');
        //connectify('success', 'Connection Found', 'Success Message Here');
        //emotify('success', 'You are awesome, your data was successfully created');


        return view('home');
        //notify()->success('Laravel Notify is awesome!');

    }
}
