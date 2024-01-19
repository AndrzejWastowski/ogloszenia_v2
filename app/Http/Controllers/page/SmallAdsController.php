<?php

namespace App\Http\Controllers\page;
use App\Http\Controllers\Controller;
use App\Models\SmallAds;
use App\Models\SmallAdsCategorie;
use App\Models\SmallAdsSubCategorie;
use App\Models\SmallAdsContent;
use App\Models\SmallAdsPhoto;


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
    public function lists(Request $request)
    {
        $categories = SmallAdsCategorie::with('SmallAdsSubCategories')->get();

        return view('page.small_ads.lists',compact('categories'));
    }

    public function show(Request $request)
    {
        return view('page.small_ads.show');
    }

}
