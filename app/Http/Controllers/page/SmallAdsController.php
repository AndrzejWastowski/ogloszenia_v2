<?php

namespace App\Http\Controllers\page;
use App\Http\Controllers\Controller;

use App\Models\SmallAdsCategorie;
use App\Models\SmallAdsSubCategorie;
use App\Models\SmallAdsContent;
use App\Models\SmallAdsPhoto;
use Carbon\Carbon;
use App\Services\ImageService;

use Illuminate\Http\Request;

class SmallAdsController extends Controller
{
    protected $imageService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    
public function modyfikuj()
{
    $contents = SmallAdsContent::All();

    foreach ($contents as $content)
    {
        $date = Carbon::createFromFormat('Y-m-d H:i:s', $content->created_at);
        $year = $date->format('Y');
        $day = $date->format('Ymd');

        $path = $year.'/'.$day;
        $content->image_path = $path;
        $content->update();
        echo  $content->image_path.'<br>';
    }

    return;
}
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function lists()
    {

        $categories = SmallAdsCategorie::with('SmallAdsSubCategories')->get();

        $activeCategory = SmallAdsCategorie::orderby('name')->firstOrFail();
        $activeSubCategory = SmallAdsSubCategorie::orderby('name')->firstOrFail();


        $today = Carbon::now();
        $contents_top = SmallAdsContent::with(['user','photos'])
        ->where('date_start', '<=', $today)
        ->where('date_end', '>=', $today)
        ->where('status','active')
        ->where('top','1')
        ->get();
/*
        $contents_top = $contents_top->map(function ($content) {
        $content->imagePath = $this->imageService->createImagePath('drobne',$content->date_add);
        return $content;
    });
*/

        $today = Carbon::now();
        $contents = SmallAdsContent::with(['user','photos'])
        ->where('date_start', '<=', $today)
        ->where('date_end', '>=', $today)
        ->where('status','active')
        ->where('top','0')
        ->get();

/*
        $contents = $contents->map(function ($content) {
            $content->imagePath = $this->imageService->getImagePath('drobne',$content->date_add);
            return $content;
        });
    */

        $pageTitle = 'Ogłoszenia drobne';

        return view('page.small_ads.lists',compact('pageTitle','contents_top','contents','categories','activeCategory','activeSubCategory'));
    }

    /**
     * Show the simple small add .
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function show($smallAdsContent)
    {

        $content = SmallAdsContent::with(['category','subCategory','photos','topPhoto'])->where('id', $smallAdsContent)->firstOrFail();
        $today = Carbon::now();

        $pageTitle = 'Ogłoszenia drobne'.$content->name;
        return view('page.small_ads.show',compact('pageTitle','content'));
    }
        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function category ($CategorieLink)
     {
        $categories = SmallAdsCategorie::with('SmallAdsSubCategories')->get();
        $activeCategory = SmallAdsCategorie::where('link', $CategorieLink)->firstOrFail();
        $today = Carbon::now();
        $contents_top = SmallAdsContent::with(['user','photos'])
        ->where('small_ads_categories_id', $activeCategory->id)
        ->where('date_start', '<=', $today)
        ->where('date_end', '>=', $today)
        ->where('status','active')
        ->where('top','1')
        ->get();

        $contents =  SmallAdsContent::with(['user','photos'])
        ->where('small_ads_categories_id', $activeCategory->id)
        ->where('date_start', '<=', $today)
        ->where('date_end', '>=', $today)
        ->where('status','active')
        ->get();

        $pageTitle = 'Ogłoszenia drobne - ';
        $activeSubCategory = "wszystkie kategorie";

        return view('page.small_ads.lists_category',compact('pageTitle','contents_top','contents','categories','activeCategory','activeSubCategory'));

     }

     public function subCategory ($CategorieLink,$SubCategorieLink)
     {

        $categories = SmallAdsCategorie::with('SmallAdsSubCategories')->get();

        $activeCategory = SmallAdsCategorie::where('link', $CategorieLink)->firstOrFail();
        $activeSubCategory = SmallAdsSubCategorie::where('link', $SubCategorieLink)->firstOrFail();

        // $content = SmallAdsContent::where('small_ads_sub_categories_id',$podkategoria->id)->tosql();;

        $today = Carbon::now();
        $contents_top = SmallAdsContent::with(['user','photos'])
        ->where('small_ads_sub_categories_id', $activeSubCategory->id)
        ->where('date_start', '<=', $today)
        ->where('date_end', '>=', $today)
        ->where('status','active')
        ->where('top','1')
        ->get();
/*
        $contents_top = $contents_top->map(function ($content) {
        $content->imagePath = $this->imageService->createImagePath('drobne',$content->date_add);
        return $content;
    });
*/

        $today = Carbon::now();
        $contents = SmallAdsContent::with(['user','photos'])
        ->where('small_ads_sub_categories_id', $activeSubCategory->id)
        ->where('date_start', '<=', $today)
        ->where('date_end', '>=', $today)
        ->where('status','active')
        ->where('top','0')
        ->get();

/*
        $contents = $contents->map(function ($content) {
            $content->imagePath = $this->imageService->getImagePath('drobne',$content->date_add);
            return $content;
        });
    */

        $pageTitle = 'Ogłoszenia drobne z kategori: '.$activeCategory->name.' i podkategorii: '.$activeSubCategory->name;
        return view('page.small_ads.lists_subcategory',compact('pageTitle','contents_top','contents','categories','activeCategory','activeSubCategory'));
     }

}
