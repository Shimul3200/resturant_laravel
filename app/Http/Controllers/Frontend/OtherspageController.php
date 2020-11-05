<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\gallery;
use App\Item;

class OtherspageController extends Controller
{
    public function contact(){
        return view('frontend.otherspage.contact');
    }
    public function story(){
        return view('frontend.otherspage.story');
    }

    public function gallery(){
        $images = gallery::orderBy('id','DESC')->get();
        return view('frontend.otherspage.gallery',\compact('images'));
    }

        public function item(){
            $items = Item::orderBy('id','desc')->where('status',1)->get();
            return view('frontend.otherspage.item',\compact('items'));
        }
        
    public function itemDetails($id)
    {

        $items = Item::where('id',$id)->first();

        return view('frontend.otherspage.itemDetails',\compact('items'));

    }
}
