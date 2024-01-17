<?php

namespace App\Http\Controllers\page;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SmallAdsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function lists()
    {
        return view('page.small_ads.lists');
    }
}
