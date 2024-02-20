<?php

namespace App\Http\Controllers\page;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Models\SmallAdsCategorie;
use App\Models\SmallAdsSubCategorie;
use App\Models\SmallAdsContent;
use App\Models\SmallAdsPhoto;
use App\Enums\Invoice;
use App\Enums\Status;
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

        return view('page.small_ads.lists_subcategory',compact('pageTitle','contents_top','contents','categories','activeCategory','activeSubCategory'));
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

     public function getSubcategory($categoriesId)  {

        $activeSubCategory = SmallAdsSubCategorie::select('id', 'name')->where('small_ads_categories_id', $categoriesId)->get();

        return Response()->json($activeSubCategory);
    }

    public function small_ads_add()
    {
        $user = Auth::user();
        $content = new SmallAdsContent();
        $content->date_start = now();
        $categories =  SmallAdsCategorie::All();
        $subcategories = new SmallAdsSubCategorie();

        $sidebar = 'twoje_ogloszenia';
        $sidebar_element = 'small_ads_add';
        return view('page.user.small_ads_add',compact('content','user','sidebar','categories'));
    }
    public function small_ads_add_send(Request $request) {


        $validatedData = $request->validate([
            'small_ads_classified_enum' => 'required|in:7,14,30',
            'small_ads_categories_id' => 'required|min:6',
            'small_ads_sub_categories_id' => 'required|min:1|max',
            'date_start' => 'required|min:1|max',
            'date_end' => 'required|in:7,14,30',
            'name' => 'required|max:255',
            'lead' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|max:255',
            'items' => 'required|max:255',
            'invoice' => ['required',Rule::in(Invoice::cases())],
            'condition' => 'required|max:255',
            'contact_phone' => 'required|max:255',
            'contact_email' => 'required|email|unique:users,email'
        ]);
        dd($validatedData);
        return redirect('page.user.small_ads_photo'); // Przekierowanie na stronę sukcesu.
    }

}
