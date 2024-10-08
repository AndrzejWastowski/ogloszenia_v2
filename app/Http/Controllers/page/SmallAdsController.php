<?php

namespace App\Http\Controllers\page;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Models\SmallAdsCategorie;
use App\Models\SmallAdsSubCategorie;
use App\Models\SmallAdsContent;
use App\Validators\Validator;
use App\Models\SmallAdsPhoto;
use App\Models\OrderList;
use App\Models\Price;

use App\Enums\Inscription;
use App\Enums\Highlighted;

use Illuminate\Support\Facades\File;
use App\Http\Requests\SmallAds\ContentRequest;
use App\Http\Requests\SmallAds\PromotionRequest;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use App\Services\ImageService;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

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
        $this->middleware('auth');
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

    public function content_form()
    {
        $user = Auth::user();
        $content = SmallAdsContent::where('users_id', $user->id) // Filtruj po 'users_id'
        ->where('status', 'unfinished') // Filtruj po 'active' = false
        ->first(); // Pobierz pierwszy rekord z wyników
        if ($content === null)
        {
            $content = new SmallAdsContent();
        }
       // $content->date_start = now();

        $data_start = Carbon::parse($content->date_start);
        $data_end = Carbon::parse($content->date_end);
        $roznica_dni = $data_start->diffInDays($data_end);

        $content->date_start = Carbon::parse(now())->format('Y-m-d H:i');

        $content->date_end = $roznica_dni;

        $categories =  SmallAdsCategorie::All();
        $subcategories = new SmallAdsSubCategorie();

        $sidebar = 'twoje_ogloszenia';
        $sidebar_element = 'small_ads_add';
        return view('page.user.small_ads.content_form',compact('content','user','sidebar','categories','sidebar_element'));
    }

    public function content_post(ContentRequest $request) {

        $validated = $request->validated();
        $validated['users_id'] = Auth::id();

        if ($validated['id']==0)
        {
           // Zapis danych do bazy danych
           SmallAdsContent::create($validated); // Zastąp TwojModel nazwą Twojego modelu
        }
         else
         {
            // Znajdź istniejący rekord w bazie danych
            $rekord = SmallAdsContent::find($validated['id']);

            // Aktualizuj dane
            $rekord->update($validated);
         }

        return redirect()->route('page.user.small_ads.photo_form'); // Przekierowanie na stronę sukcesu.
    }

    public function photo_form(Request $request) {
        $user = Auth::user();
        $sidebar = 'twoje_ogloszenia';
        $sidebar_element = 'small_ads_add';
        $content = SmallAdsContent::with('photos')->where('users_id', $user->id)->where('status', 'unfinished')->first(); // Filtruj po 'active' = false
        $path = $this->imageService->createImagePath('drobne',$content->created_at);

        return view('page.user.small_ads.photo_form',compact('user','sidebar','content','path'));
    }

    public function photo_send(Request $request)
    {

        $this->validate($request, [
            'file.*' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
        ]);
        $pom =0;
        $user = Auth::user();
        $content = SmallAdsContent::where('users_id', $user->id) // Filtruj po 'users_id'
        ->where('status', 'unfinished') // // Filtruj po 'status' = unfinished
        ->first(); // Pobierz pierwszy rekord z wyników
        if ($content === null)
            {
                    return response()->json(['error' => 'Nie udało się przesłać plików - błąd pobierania właściwego ogłoszenia.'], 500);
            }
            $date = $content->created_at;
        if ($request->hasFile('file')) {
            foreach($request->file('file') as $image)
            {
                $pom++;
                $uniqueId = substr(md5(time().rand()), 0, 8);
                // Tworzenie unikalnej nazwy dla każdego obrazu
                // Miejsce docelowe
                $destinationPath = $this->imageService->createImagePath('drobne',$content->created_at);

                // Sprawdź, czy folder docelowy istnieje, a jeśli nie, utwórz go


                if (!File::exists($destinationPath)) {
                    File::makeDirectory($destinationPath, 0755, true, true);
                }

                // Przetwarzanie i zapisywanie obrazu (tak jak wcześniej)

                $manager = new ImageManager(new Driver());
                $new_image = $manager->read($image->path());;

                $img = $new_image->scale(1920,1920)->toWebp(60)->save($destinationPath.'/'.$uniqueId. 'd.webp');

                $img = $manager->read($image->path());
                $image_encoded = $img->scale(350,350)->toWebp(60)->save($destinationPath.'/'.$uniqueId. 'm.webp');

                $img = $manager->read($image->path());
                $image_cover = $img->cover(350, 350)->toWebp(60)->save($destinationPath.'/'.$uniqueId. 'kw.webp');

                // Zapisywanie ścieżki do bazy danych
                $photo = new SmallAdsPhoto();
                $photo->small_ads_contents_id = $content->id;
                $photo->name = $uniqueId;
                $photo->sort = $pom;
               // $photo->top = 0;
                //$photo->description = "";
                //$photo->user_id = Auth::id(); // Dodaj tu usera
                $photo->save();
            }

            return response()->json(['success' => 'Pliki zostały pomyślnie przesłane.']);
        }
       // return response()->json(['error' => 'Nie udało się przesłać plików.'], 500);
    }

    public function photo_sendGet(Request $request)
    {
        return redirect()->route('page.user.small_ads.photo_form'); // Przekierowanie na stronę sukcesu.
    }


    public function photo_delete(Request $request)
    {
        $fileName = $request->fileName;
        $filePath = storage_path('drobne/' . $fileName);

        if (File::exists($filePath)) {
            File::delete($filePath);
            // Tutaj możesz również aktualizować bazę danych, jeśli to konieczne

            return response()->json(['success' => 'Plik usunięty.']);
        }

        return response()->json(['error' => 'Plik nie istnieje.'], 404);
    }
    public function promotion_form()
    {

        $collection = Price::where('section', 'small_ads')->get();
       // dd($collection);
        foreach ($collection as $row)
        {
            $price[$row->name]['id'] = $row->id;
            $price[$row->name]['name'] = $row->name;
            $price[$row->name]['description'] = $row->description;
            $price[$row->name]['price'] = $row->price;
        }
        $inscriptions = Inscription::cases();
        $highlighteds = Highlighted::cases();

        $user = Auth::user();
        $sidebar = 'twoje_ogloszenia';
        $sidebar_element = 'small_ads_add';
        $content = SmallAdsContent::with('photos')->where('users_id', $user->id)->where('status', 'unfinished')->first(); // Filtruj po 'active' = false
        $path = $this->imageService->createImagePath('drobne',$content->created_at);

        return view('page.user.small_ads.promotion_form',compact('user','sidebar','content','path','price','inscriptions','highlighteds'));
    }

    public function promotion_send (PromotionRequest $request)
    {

        
        $validated = $request->validated();

        $user = Auth::user();
        $content = SmallAdsContent::where('users_id', $user->id) // Filtruj po 'users_id'
        ->where('status', 'unfinished')->first(); // Filtruj po 'status' = unfinished

        //dodatkowe sprawdzanie czy użytkownik czegoś nie kombinuje

        if ($validated['id']==0)
        {
           // Zapis danych do bazy danych
           SmallAdsContent::create($validated); // Wypełnij model validowanymi danymi z requestu
        }
         else
         {
            // Znajdź istniejący rekord w bazie danych
            $rekord = SmallAdsContent::find($validated['id']);

            // Aktualizuj dane
            $rekord->update($validated);
         }
    }

}
