<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function index(){
        echo "<h1>Portofolio</h1>";
        return "Ini merupakan method index di dalam Controller Portofolio";
    }
}
