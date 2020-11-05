<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;

class HomeController extends Controller
{
    public function index()
    {
        $items = Item::orderBy('id','desc')->where('status',1)->get();
        return view('home',\compact('items'));
    }
}
