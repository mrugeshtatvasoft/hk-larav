<?php

namespace App\Helpers;

use App\Models\Setting;

class DatabaseHelpers
{
    public static function getSetting($key)
    {
        $settings = Setting::where('type', $key)->first(['value']);
        $title = $settings ? $settings->value : '';
        return $title;
    }
}