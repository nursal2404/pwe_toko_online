<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyPoliceController extends Controller
{
    public function index(){
        echo "<h1>Privacy Police</h1>";
        return "Privace Police yang diterapkan method index di dalam Controller Privacy";
    }
}
