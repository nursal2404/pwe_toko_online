<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiskonController extends Controller
{
    public function index(){
        echo "<h1>Menu Diskon</h1>";
        return "Ini adalah Menu Diskon method index di dalam Controller Diskon";
    }
}
