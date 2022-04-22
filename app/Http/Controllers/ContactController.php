<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        echo "<h1>Contact</h1>";
        echo "<p>Email : muhadzinur@gmail.com</p>";
        echo "<p>Facebook : Muhadzib Nursaid</p>";
        echo "<br>";
        return "Ini merupakan Method index di dalam Controller Contact";
    }
}
