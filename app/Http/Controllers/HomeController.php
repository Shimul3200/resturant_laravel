<?php

namespace App\Http\Controllers;

use App\Charts\Charts\MyChart;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {

        return view('home');
    }
}
