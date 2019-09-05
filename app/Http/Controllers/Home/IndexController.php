<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;

class IndexController extends Controller
{
    //
    public function getCityName()
    {
        $city = Input::get('city','福州');
        dd($city);
        echo $city;
    }
}
