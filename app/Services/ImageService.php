<?php

namespace App\Services;

use Illuminate\Support\Facades\File;
use Carbon\Carbon;

class ImageService
{
    public function createImagePath($resource,$date)
    {

        $date = Carbon::createFromFormat('Y-m-d H:i:s', $date);
        $year = $date->format('Y');
        $day = $date->format('Ymd');

        $path = public_path('storage/'.$resource."/{$year}/{$day}");

        if (!File::exists($path)) {
            File::makeDirectory($path, 0777, true, true);
        }

        return $path;
    }
}
