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


}
