<?php

namespace App\Services;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;

class ImageService
{
    public function createImagePath($resource,$date)
    {

        $date = Carbon::createFromFormat('Y-m-d H:i:s', $date);
        $year = $date->format('Y');
        $day = $date->format('Ymd');

        $path = 'storage/'.$resource."/{$year}/{$day}";

        if (!File::exists($path)) {
            File::makeDirectory($path, 0777, true, true);
        }

        return $path;
    }

    public function getImagePath($resource,$date)
    {

        $date = Carbon::createFromFormat('Y-m-d H:i:s', $date);
        $year = $date->format('Y');
        $day = $date->format('Ymd');

        $path = 'storage/'.$resource."/{$year}/{$day}";

        return $path;
    }
   
}
