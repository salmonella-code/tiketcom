<?php

namespace App\Http\Controllers;

use App\bannerMobile;
use App\bannerWeb;
use App\Plane;
use App\promo;
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
        $data = bannerMobile::all();
        $bannerWeb = bannerWeb::all();
        $promosi = promo::all();
        $plane = Plane::all();


        return view('index', compact('data', 'bannerWeb', 'promosi' ,'plane'));
        // return view('home');
    }

    // public function adminHome()

    // {

    //     return view('dashboard.index');

    // }
}

