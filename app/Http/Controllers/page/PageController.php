<?php

namespace App\Http\Controllers\page;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;
use App\Models\Page;

class PageController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    

       /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function page($parametr)
    {
        $page = Page::where('link', $parametr)->firstOrFail();
        return view('page.page',compact('page'));
    }
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function instrukcja_usuniecia_konta()
    {
        $this->page('instrukcja_usuniecia_konta');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function regulamin()
    {
        $this->page('regulamin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function polityka_poprawnosci()
    {
        $this->page('polityka_poprawnosci');
    }

   
}
