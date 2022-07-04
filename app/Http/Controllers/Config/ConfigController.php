<?php

namespace App\Http\Controllers\Config;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function clearRoute(){
        \Artisan::call('route:clear');
        \Artisan::call('cache:clear');
        \Artisan::call('config:clear');
        return 'alla';
    }
}
