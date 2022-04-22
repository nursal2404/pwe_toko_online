<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function halaman(){
        return "Ini merupakan Method halaman di dalam Controller Home ";
    }
}
