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
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $j = "";
        return view('home');
    }
    public function legality()
    {
        return view ('legality');
    }
    public function conntact()
    {
        return view ('conntact');
    }
    public function about()
    {
        return view ('about');
    }
}
