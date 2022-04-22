<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisclaimerController extends Controller
{
    public function index(){
        echo "<h1>Disclaimer</h1>";
        return "Informasi Disclaimer method index di dalam Controller Disclaimer";
    }
}
