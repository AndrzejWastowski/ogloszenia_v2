<?php

namespace App\Http\Controllers\page;
use App\Http\Controllers\Controller;
use App\Models\SmallAdsContent;
use App\Models\SmallAdsCategorie;
use App\Models\SmallAdsSubCategorie;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
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
    public function userDashboard ($UserId)
    {

        $user = Auth::user();
        $content = '';
        return view('page.dashboard.user_dashboard',compact('content','user'));
    }

    public function your_ads ()
    {
        $user = Auth::user();
        $content = '';
        $sidebar = 'twoje_ogloszenia';
        return view('page.user.your_ads',compact('content','user','sidebar'));
    }

    public function small_ads_add()
    {
        $user = Auth::user();
        $content = new SmallAdsContent();
        $content->date_start = now();
        $categories =  SmallAdsCategorie::All();
        $subcategories =  SmallAdsSubCategorie::All();
       
        $sidebar = 'twoje_ogloszenia';
        $sidebar_element = 'small_ads_add';
        return view('page.user.small_ads_add',compact('content','user','sidebar','categories','subcategories'));
    }
}
