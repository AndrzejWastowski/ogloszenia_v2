<?php

namespace App\Http\Controllers\page;
use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
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
    public function userDashboard ($UserId)
    {

        $user = User::where('id', $UserId)->firstOrFail();
        $content = '';
        return view('page.dashboard.user_dashboard',compact('content','user'));
    }
}
