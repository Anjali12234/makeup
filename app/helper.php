<?php

use App\Models\Gallery;
use App\Models\Programme;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Student;
use App\Models\SystemSetting;
use Illuminate\Support\Facades\Cache;



if (!function_exists('systemSetting')) {
    function systemSetting()
    {
        return Cache::rememberForever('systemSetting', function () {
            return SystemSetting::latest()->first();
        });
    }
}


if (!function_exists('sliders')) {
    function sliders()
    {
        return Slider::all();
    }
}
if (!function_exists('services')) {
    function services()
    {
        return Service::all();
    }
}
