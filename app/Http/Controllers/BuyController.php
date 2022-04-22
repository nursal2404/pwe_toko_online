<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyController extends Controller
{
    public function index(){
        echo "<h1>Menu Pembelian</h1>";
        return "Ini merupakan Menu Pembelian method index di dalam Controller Buy";
    }
}
