<?php

namespace App\Http\Controllers\page;
use App\Http\Controllers\Controller;
use App\Models\SmallAds;
use App\Models\SmallAdsCategorie;
use App\Models\SmallAdsSubCategorie;
use App\Models\SmallAdsContent;
use App\Models\SmallAdsPhoto;
use Carbon\Carbon;


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
        $categories = SmallAdsCategorie::with('SmallAdsSubCategories')->get();

        return view('page.small_ads.lists',compact('categories'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function show(Request $request)
    {
        return view('page.small_ads.show');
    }
        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function category ($SmallAdsCategorie)
     {
        
        $categories = SmallAdsCategorie::with('SmallAdsSubCategories')->get();
        $smallAds = SmallAdsContent::where('small_ads_categories_id',$SmallAdsCategorie->id)->get();;
        $pageTitle = 'Ogłoszenia drobne - ';

        return view('page.small_ads.lists',compact('pageTitle','categories','smallAds'));

     }

     public function subCategory ($CategorieLink,$SubCategorieLink)
     {

        $categories = SmallAdsCategorie::with('SmallAdsSubCategories')->get();

        $activeCategory = SmallAdsCategorie::where('link', $CategorieLink)->firstOrFail();
        $activeSubCategory = SmallAdsSubCategorie::where('link', $SubCategorieLink)->firstOrFail();

       // $content = SmallAdsContent::where('small_ads_sub_categories_id',$podkategoria->id)->tosql();;

       $today = Carbon::now();
        $content = SmallAdsContent::where('small_ads_sub_categories_id', $activeSubCategory->id)    
        ->where('date_start', '<=', $today)
        ->where('date_end', '>=', $today)
        ->where('status','active')
        ->get();


        $pageTitle = 'Ogłoszenia drobne z kategori: '.$activeCategory->name.' i podkategorii: '.$activeSubCategory->name;
        return view('page.small_ads.lists',compact('pageTitle','content','categories','activeCategory','activeSubCategory'));

     }

}
