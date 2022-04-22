<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index(){
        echo "<h1>About Us</h1>";
        echo "<p>Nama : Muhadzib Nursaid</p>";
        echo "<p>NPM : G1A020035</p>";
        echo "<br>";
        return "Ini merupakan Method index di dalam Controller About Us";
    }
}
